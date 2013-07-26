<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Los_Angeles');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
//	'errors' => false
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */

//This is for versioned custom modules
//custom modules should be stored in modules/path/version
$custom_modules = array(
	'pancake_waffle'	=> array('version' => 2, 'directory' => 'pancake/waffle'),
	'pancake_auth'		=> array('version' => 2, 'directory' => 'pancake/authentication'),
	'pancake_client'	=> array('version' => 2, 'directory' => 'pancake/client'),
	'pancake_greyhound'	=> array('version' => 1, 'directory' => 'pancake/greyhound'),
	'pancake_response'	=> array('version' => 1, 'directory' => 'pancake/response'),
	'pancake_exception'	=> array('version' => 1, 'directory' => 'pancake/exception'),
	'pancake_session'	=> array('version' => 1, 'directory' => 'pancake/session'),
	'pancake_status'	=> array('version' => 1, 'directory' => 'pancake/status'),
	'utils'             => array('version' => 1, 'directory' => 'utils'),
);

//These are kohana modules or modules that don't use versioning
//TODO:
//All custom modules should be transferred over for versioning to the $custom_modules array
$base_modules = array(
	'auth'					=> MODPATH.'auth',       // Basic authentication
//	 'cache'      => MODPATH.'cache',      // Caching with multiple backends
//	 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	'database'				=> MODPATH.'database',   // Database access
//	 'image'      => MODPATH.'image',      // Image manipulation
	'orm'					=> MODPATH.'orm',        // Object Relationship Mapping
//	 'unittest'   => MODPATH.'unittest',   // Unit testing
//	'assets'		=> MODPATH.'assets',
);

$modules = array();
foreach($custom_modules as $name => $info)
{
	$modules[$name] = MODPATH.$info['directory'].'/v'.$info['version'];
}

$modules = array_merge($base_modules, $modules);

Kohana::modules($modules);

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('waffle', array('PancakeRoute', 'handler'));

// Ex: api.com/v1/menu/list
Route::set('api', '<directory>/<controller>/<action>');

Route::set('default', '(<controller>(/<action>))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
	));

set_exception_handler(array('PancakeException', 'handler'));

class PancakeRoute
{
	static public function handler($uri)
	{
		$accepted = array('waffle', 'internal', 'greyhound', 'patriots', 'auth', 'social', 'rtable', 'toaster','reds');
		$parts = explode('/', $uri);
		if(in_array($parts[0], $accepted))
		{
			$version = $parts[1];
			$directory = $parts[0].'/'.$version;
			$controller = $parts[2];
			$action = $parts[3];

			return array(
				'directory' => $directory,
				'controller' => $controller,
				'action' => $action,
			);
		}
	}
}


Cookie::$salt = 'a8f8f5dcb67bd36b72530c8c02b83b94';
Session::$default = 'database';

$localhost_mode = FALSE;
$development_mode = FALSE;
$production_mode = TRUE;

$enabled_count = 0;
$disabled_count = 0;

$modes = array(
	$localhost_mode,
	$development_mode,
	$production_mode,
);

foreach($modes as $mode)
{
	if($mode) $enabled_count++;
	else $disabled_count++;
}

if($enabled_count != 1)
{
	throw new ErrorException('Invalid number of active modes', 'Only one mode can be enabled at any given time.');
	exit;
}

if($localhost_mode)
{
	$server = 'localhost';
	$db_prefix = 'icgtest';
	$request_type = 'REQUEST';
}
elseif($development_mode)
{
	$server = 'icgtest.info';
	$db_prefix = 'icgtest';
	$request_type = 'REQUEST';
}
elseif($production_mode)
{
	$server = 'icgclients.com';
	$db_prefix = 'icgclien';
	$request_type = Request::POST;
}

$pancake_server = ($production_mode) ? 'icgclients.com' : 'icgtest.info';

define('BASE_URL', $server);
define('DB_PREFIX', $db_prefix);
define('PANCAKE_URL', 'http://pancake.icgclients.com');// . $pancake_server);
define('REQUEST_TYPE', $request_type);