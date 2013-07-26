<?php

defined('SYSPATH') or die('No direct access');

class Controller_Login extends Controller
{
	
	public function before()
	{
		$requires_server_admin_auth = array(
			'generate_scripts',
			'create_client',
			'clients',
			'get_clients',
		);
		
		if(in_array($this->request->action(), $requires_server_admin_auth))
		{
			$session_id = Arr::get($_POST, 'session_id', NULL);
			if($session_id)
			{
				$is_server_admin = PancakeAuth::check_role('server_admin', $session_id);
				if(!$is_server_admin)
				{
					header('HTTP/1.1 401 Unauthorized');
					echo PancakeResponse::out(FALSE, 'You are not authorized to see this page.');
					exit;
				}
			}
			else
			{
				header('HTTP/1.1 401 Unauthorized');
				echo PancakeResponse::out(FALSE, 'You are not authorized to see this page.');
				exit;
			}
		}
	}
	
//	public function action_get_roles()
//	{
//		$id = 21;
//		$results = DB::select('*')
//			->from('roles')
//			->execute()
//			->as_array();
//		echo '<pre>';
//		print_r($results);
//		echo '</pre>';
//		die();
//	}

//	public function action_test_generate_db()
//	{
//		echo $this->_generate_user_database('test1234', 'icg_mysql', 'VWmlJhUbPQ');
//	}
//
//	public function action_test_generate_json_path()
//	{
//		print_r($this->_generate_json_path('patriots', 'api/get_stand_content?stand_id=10'));
//	}
//
//	public function action_test_generate_update_script()
//	{
//		$client = 'patriots';
//		$json_path = $this->_generate_json_path($client, 'api/get_stand_content?stand_id=10');
//		echo '<pre>';
//		var_dump($this->_generate_update_script($client, $json_path));
//		echo '</pre>';
//	}
	
//	public function action_add_role()
//	{
//		$role_name = Arr::get($_REQUEST, 'role', NULL);
//		if($role_name)
//		{
//			$result = DB::insert('roles', array('name'))
//				->values(array($role_name))
//				->execute();
//			if($result)
//			{
//				echo '<pre>';
//				print_r($result);
//				echo '</pre>';
//			}
//		}
//	}
	
//	public function action_createuser()
//	{
//		$user_data = array(
//			'email' => 'equemuel@icginfo.com',
//			'system_name' => 'rtable',
//			'consumer_key' => md5('rtable'),
//			'username' => 'rtable',
//			'password' => 'rtable',
//			'password_confirm' => 'rtable',
//		);
//		
//		$model = ORM::factory('user', $user_data['username']);
//
//		if ( !$model->is_loaded() ) {
//			$user = ORM::factory('user');
//			$user->values($user_data);
//			$user->save();
//
//			$user->add('roles', 1);
//			$user->add('roles', 2);
//			$user->add('roles', 9);
//		}
//		else
//		{
//			echo 'The user has already registered';
//		}
//		
//		
//
//		
//
//		//Roles:
//		// 1- Login
//		// 2- Admin
//		// 3- ICG
//		// 4- Patriots
//		//6 - Reds
//		//7- McD
//		//8 - greyhound
//		//9- Round Table
//	}

	private function _generate_update_script($client, $json_path)
	{
		$regex = "/CLIENT=\".*/";
		$update_script = file_get_contents('update.sh');
		$client_updated = preg_replace($regex, "CLIENT=\"" . $client . "\"", $update_script);
		$json_path_regex = "/(?<!\#)JSON_PATH=\".*/";
		$final_script = preg_replace($json_path_regex, "JSON_PATH=\"" . $json_path . "\"" . '$PROFILE_ID', $client_updated);
		$result = file_put_contents($client . '_update.sh', $final_script);
		$command = "chmod +x " . $client . "_update.sh; mv -f " . $client . "_update.sh /home/scripts;";
		$output = array();
		exec($command, $output);
		return $result > 0;
	}

	
	
	public function action_generate_script()
	{
		$client = Arr::get($_REQUEST, 'client', NULL);
		$json_path = Arr::get($_REQUEST, 'json_path', NULL);
		$id = Arr::get($_REQUEST, 'id', NULL);

//		$json_path = $this->_generate_json_path($client, $json_path);
		
		$json_path_result = DB::select('json_path')
			->from('users')
			->where('id', '=', $id)
			->execute()
			->as_array();
		if ($json_path_result)
		{
			if($json_path != $json_path_result[0]['json_path'])
			{
				$update_query = DB::update('users')
					->set(array(
						"json_path" => $json_path
					))
					->where('id', '=', $id)
					->execute();
			}
		}

		$status = FALSE;
		if ($client && $json_path)
		{
			$result = $this->_generate_update_script($client, $json_path);
			if (!$result)
			{
				$message = "Error creating the update script.";
			}
			else
			{
				$status = TRUE;
				$message = "Successfully created the update script";
			}
		}
		else
		{
			$message = "All parameters must be filled out.";
		}
		$output = PancakeResponse::out($status, $message);
		$this->response->body($output);
	}

//	private function _generate_json_path($client, $json_path)
//	{
//		$absolute_path = PANCAKE_URL . "/" . $client . "/v1/" . $json_path;
//		return $absolute_path;
//	}

	private function _random_password()
	{

		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789./!@#$%^&*()_-+=";
		$pass = array(); //remember to declare $pass as an array
		for ($i = 0; $i < 8; $i++)
		{
			$n = rand(0, strlen($alphabet) - 1); //use strlen instead of count
			$pass[$i] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}

	private function _generate_user_database($system_name, $mysql_user, $mysql_password)
	{
//		$status = 0;

		$database_name = DB_PREFIX . '_c_' . $system_name;
		$db_username = DB_PREFIX . '_' . $system_name;
		$db_password = $this->_random_password();

		$config = array(
			'type' => 'mysql',
			'connection' => array(
				'hostname' => 'localhost',
				'username' => $mysql_user,
				'password' => $mysql_password,
				'persistent' => FALSE,
				'database' => 'icgtest_clients',
			),
			'table_prefix' => '',
			'charset' => 'utf8',
			'caching' => FALSE,
			'profiling' => TRUE,
		);

		$create_db_query = "CREATE DATABASE IF NOT EXISTS " . $database_name;
		$hardware_table_query = "CREATE TABLE `w_hardware` (`id` int(10) unsigned NOT NULL auto_increment,	`name` varchar(100) NOT NULL,	`code` varchar(20) NOT NULL,	`authorized_ts` int(10) unsigned NOT NULL default '0',	PRIMARY KEY  (`id`),	UNIQUE KEY `code` (`code`),	UNIQUE KEY `name` (`name`)   ) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1";		
		$profile_table_query = "CREATE TABLE `w_profiles` ( `id` int(10) unsigned NOT NULL auto_increment, `name` varchar(100) NOT NULL, `update_interval` int(11) NOT NULL default '3600', `update_url` varchar(100) NOT NULL, `extract_path` varchar(100) NOT NULL, `content_path` varchar(100) NOT NULL, `launch` varchar(100) NOT NULL, `auto_launch` tinyint(1) NOT NULL default '1', `tz_offset` int(11) default NULL, `push_url` varchar(100) NOT NULL, `push_username` varchar(50) NOT NULL, `push_password` varchar(20) NOT NULL, `push_zone` varchar(30) NOT NULL, `push_room` varchar(30) NOT NULL, PRIMARY KEY  (`id`), UNIQUE KEY `name_2` (`name`)) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1";
		$profile_map_query = "CREATE TABLE `w_profile_map` ( `hardware_id` int(10) unsigned NOT NULL, `profile_id` int(10) unsigned NOT NULL, `default` tinyint(1) unsigned NOT NULL default '0', UNIQUE KEY `hardware_id` (`hardware_id`,`profile_id`), KEY `default` (`default`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
		$create_user_query = "CREATE USER '" . $db_username . "'@'localhost'";
		$grant_query = "GRANT SELECT, INSERT, UPDATE, DELETE, DROP ON * TO " . $db_username . "@'localhost'";

		$db_create = Database::instance('user_db_create', $config);
		try
		{
			$result = DB::query(NULL, $create_db_query)
				->execute($db_create);

			$config = array(
				'type' => 'mysql',
				'connection' => array(
					'hostname' => 'localhost',
					'username' => $mysql_user,
					'password' => $mysql_password,
					'persistent' => FALSE,
					'database' => $database_name,
				),
				'table_prefix' => '',
				'charset' => 'utf8',
				'caching' => FALSE,
				'profiling' => TRUE,
			);
			$db = Database::instance('user_db_grant', $config);
			
			$result = DB::query(NULL, $hardware_table_query)
				->execute($db);
			
			$result = DB::query(NULL, $profile_table_query)
				->execute($db);
			
			$result = DB::query(NULL, $profile_map_query)
				->execute($db);
			
			$result = DB::query(NULL, $create_user_query)
				->execute($db);

			$result = DB::query(NULL, $grant_query)
				->execute($db);
			
			$data = array(
				'system_name' => $system_name,
				'db_name' => $database_name,
				'db_user' => $db_username,
				'db_password' => $db_password,
			);

			return PancakeResponse::out(TRUE, 'Successfully created the client ' . $system_name . '. Please save this information in a safe place.', $data);
		}
		catch (Database_Exception $e)
		{
			return PancakeResponse::out(FALSE, $e->getMessage());
		}
	}

	private function _check_email_address($email)
	{
		// First, we check that there's one @ symbol, and that the lengths are right
		if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email))
		{
			// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
			return false;
		}
		// Split it into sections to make life easier
		$email_array = explode("@", $email);
		$local_array = explode(".", $email_array[0]);
		for ($i = 0; $i < sizeof($local_array); $i++)
		{
			if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i]))
			{
				return false;
			}
		}
		if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1]))
		{ // Check if domain is IP. If not, it should be valid domain name
			$domain_array = explode(".", $email_array[1]);
			if (sizeof($domain_array) < 2)
			{
				return false; // Not enough parts to domain
			}
			for ($i = 0; $i < sizeof($domain_array); $i++)
			{
				if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i]))
				{
					return false;
				}
			}
		}

		return true;
	}

	public function action_create_user()
	{
		if ($_POST)
		{
			$status = FALSE;
			$data = array();
			if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']))
			{
				if ($_POST['password'] === $_POST['confirm_password'])
				{
					if ($this->_check_email_address($_POST['email']))
					{
						$temp = Arr::get($_POST, 'temp', false);
						$status = PancakeAuth::create_user($_POST['email'], $_POST['username'], $_POST['password'], $_POST['password_confirm'], $temp);
					}
					else
					{
						$message = "Not a valid email address";
					}
				}
				else
				{
					$message = "The passwords do not match";
				}
			}
			else
			{
				$message = "All fields must be filled out.";
			}
		}
		$output = PancakeResponse::out($status, $message);

		$this->response->body($output);
	}

	public function action_clients()
	{
		$clients = DB::select('*')
			->from('users')
			->where('system_name', '!=', '')
			->where('consumer_key', '!=', '')

			//This portion will only be necessary until the apiv1 template is upgraded
			->where('username', '!=', 'rtable_consumer')
			->execute()
			->as_array();
		$view = View::factory('icg/clients');
		$view->clients = $clients;
		$this->response->body($view);
	}

	public function action_logout()
	{
		$session_id = Arr::get($_POST, 'session_id');
		$session = Session::instance('database', $session_id);
		$user = Auth::instance($session);
		$logout = $user->logout(TRUE);
		$output = ($logout) ? PancakeResponse::out(TRUE, 'User Has logged out successfully.') : PancakeResponse::out(FALSE, 'Error Logging out.');
		$this->response->body($output);
	}

	public function action_is_logged_in()
	{
		$session_id = Arr::get($_POST, 'session_id');
		$session = Session::instance('database', $session_id);
		$user = Auth::instance($session);

		if ($user->logged_in())
		{
			$output = PancakeResponse::out(TRUE, 'User is logged in.');
		}
		else
		{
			$output = PancakeResponse::out(FALSE, 'User is not logged in.');
		}
		$this->response->body($output);
	}

	public function action_get_clients()
	{
		$status = FALSE;
		$data = array();
		$clients = DB::select('s.salt', 'u.id', 'u.username', 'u.system_name', 'u.consumer_key', 'u.json_path')
			->from(array('users', 'u'))
			->join(array('salts', 's'))
			->on('s.user_id', '=', 'u.id')
			->where('u.system_name', '!=', '')
			->where('u.consumer_key', '!=', '')

			//This portion will only be necessary until the apiv1 template is upgraded
			->where('u.username', '!=', 'rtable_consumer')
			->execute()
			->as_array();
		if ($clients)
		{
			$message = "Successfully retrieved clients.";
			$data = $clients;
			$status = TRUE;
		}
		else
		{
			$message = "Failed to retrieve clients.";
		}
		$this->response->body(PancakeResponse::out($status, $message, $data));
	}

	public function action_get_url()
	{
		
	}

	public function action_is_admin()
	{
		$session_id = Arr::get($_POST, 'session_id');
		$session = Session::instance('database', $session_id);
		$user = Auth::instance($session);

		$user_id = $user->get_user()->id;

		$result = DB::select('r.id')
			->from(array('roles', 'r'))
			->join(array('roles_users', 'ru'))
			->on('r.id', '=', 'ru.role_id')
			->where('ru.user_id', '=', $user_id)
			->and_where('r.id', '=', 2)
			->execute()
			->as_array();
		$output = ($result) ? PancakeResponse::out(TRUE, 'User is an administrator.') : PancakeResponse::out(FALSE, 'User is not an administrator.');
		$this->response->body($output);
	}

	public function action_login()
	{
		$username = trim(Arr::get($_REQUEST, 'username'));
		$password = trim(Arr::get($_REQUEST, 'password'));
		$remember = Arr::get($_REQUEST, 'remember', false);

		if ($username == '' || !$username || $password == '' || !$password)
		{
			$output = PancakeResponse::out(FALSE, 'Username and password fields cannot be empty.');
		}
		else
		{
			$result = PancakeAuth::verify_login($username, $password, $remember);
			try
			{

				if ($result)
				{
					$session_id = Session::instance('database')->id();

					$url = $result;
					$data = array(
						'session_id' => $session_id,
						'url' => $url
					);
					$output = PancakeResponse::out(TRUE, 'Login Successful', $data);
				}
				else
				{
					$output = PancakeResponse::out(FALSE, 'Invalid username/password combination.');
				}
			}
			catch (Exception $e)
			{
				$output = PancakeResponse::out(FALSE, 'Error logging in.', $e->getMessage());
			}
		}
		$this->response->body($output);
	}

}
