<?php

defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------
// Load the core Kohana class
require SYSPATH . 'classes/kohana/core' . EXT;

if (is_file(APPPATH . 'classes/kohana' . EXT))
{
    // Application extends the core
    require APPPATH . 'classes/kohana' . EXT;
}
else
{
    // Load empty core extension
    require SYSPATH . 'classes/kohana' . EXT;
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
    Kohana::$environment = constant('Kohana::' . strtoupper($_SERVER['KOHANA_ENV']));
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
    'base_url' => '/c',
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH . 'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
    // 'auth'       => MODPATH.'auth',       // Basic authentication
    // 'cache'      => MODPATH.'cache',      // Caching with multiple backends
//     'codebench'  => MODPATH.'codebench',  // Benchmarking tool
    // 'database'   => MODPATH.'database',   // Database access
    // 'image'      => MODPATH.'image',      // Image manipulation
    // 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
    // 'unittest'   => MODPATH.'unittest',   // Unit testing
    // 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
    'pancake' => MODPATH . 'pancake',
    'toaster' => MODPATH . 'toaster',
    'icglog' => MODPATH . 'icglog',
    'uploadHandler' => MODPATH . 'uploadhandler',
    'icgloadassets' => MODPATH . 'icgloadassets',
    'icgmedia' => MODPATH . 'icgmedia'
));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('icg', 'icg/ajax/<controller>/<action>')
    ->defaults(array(
        'directory' => 'icg/ajax',
        'controller' => 'auth',
        'action' => 'index',
    ));

Route::set('ajax', 'patriots/ajax/<controller>/<action>')
    ->defaults(array(
        'directory' => 'patriots/ajax',
        'controller' => 'event',
        'action' => 'index',
    ));

Route::set('rtable_ajax', 'rtable/ajax/<controller>/<action>')
    ->defaults(array(
        'directory' => 'rtable/ajax',
        'controller' => 'event',
        'action' => 'login',
    ));

Route::set('default', '<directory>(/<controller>(/<action>(/<id>)))')
    ->defaults(array(
        'directory' => 'icg',
        'controller' => 'login',
        'action' => 'index',
    ));

Route::set('root', '')
    ->defaults(array(
        'directory' => 'icg',
        'controller' => 'login',
        'action' => 'index',
    ));

Cookie::$salt = md5('fsdakjhugfklnudfguihbvdz13213020.0');

//Checks the domain of the current server and based on it is in production/dev environement
$result2 = explode('www.', $_SERVER['HTTP_HOST']);
$result1 = explode('/', end($result2));
$results = explode('.', $result1[0]);
if (count($results) > 1) {
    array_pop($results);
    $domain = end($results);
} else {
    $domain = array_pop($results);
}

$localhost_mode = ($domain == 'localhost');
$development_mode = ($domain == 'icgtest');
$production_mode = ($domain == 'icgclients');

$enabled_count = 0;
$disabled_count = 0;

$modes = array(
    $localhost_mode,
    $development_mode,
    $production_mode,
);

foreach ($modes as $mode)
{
    if ($mode)
        $enabled_count++;
    else
        $disabled_count++;
}

if ($enabled_count != 1)
{
    throw new Exception('Invalid number of active modes: Only one mode can be enabled at any given time. (localhost, development, or production)', 500);
    exit;
}

if ($localhost_mode)
{
    $server = 'localhost';
    $db_prefix = 'icgtest';
    $request_type = 'REQUEST';
    Kohana::$environment = Kohana::DEVELOPMENT;
}
elseif ($development_mode)
{
    $server = 'icgtest.info';
    $db_prefix = 'icgtest';
    $request_type = 'REQUEST';
    Kohana::$environment = Kohana::DEVELOPMENT;
}
elseif ($production_mode)
{
    $server = 'icgclients.com';
    $db_prefix = 'icgclien';
    $request_type = Request::POST;
    Kohana::$environment = Kohana::PRODUCTION;
}

$pancake_server = (Kohana::$environment === Kohana::PRODUCTION) ? 'icgclients.com' : 'icgtest.info';

define('BASE_URL', $server);
define('DB_PREFIX', $db_prefix);
define('PANCAKE_URL', 'http://pancake.' . $pancake_server);
define('REQUEST_TYPE', $request_type);