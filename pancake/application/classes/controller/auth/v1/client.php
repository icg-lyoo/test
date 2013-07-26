<?php

defined('SYSPATH') or die('No direct access');

class Controller_Auth_v1_Client extends Controller_Auth_v1_Auth
{

    private function _get_json_url($client_id)
    {
        $results = DB::select('json_url')
            ->from('clients')
            ->where('id', '=', $client_id)
            ->execute()
            ->as_array();
        return $results[0]['json_url'];
    }

    public function action_get_json_url()
    {
        $client_id = Arr::get($_POST, 'client_id');
        $json_url = $this->_get_json_url($client_id);
        $this->template->content = PancakeResponse::out(TRUE, NULL, array('json_url' => $json_url));
    }

    private function _generate_update_script($client, $json_url)
    {
        $regex = "/CLIENT=\".*/";
        $update_script = file_get_contents('update.sh');
        $client_updated = preg_replace($regex, "CLIENT=\"" . $client . "\"", $update_script);
        $json_url_regex = "/(?<!\#)JSON_PATH=\".*/";
        $final_script = preg_replace($json_url_regex, "JSON_PATH=\"" . $json_url . "\"" . '$PROFILE_ID', $client_updated);
        $result = file_put_contents($client . '_update.sh', $final_script);
        $command = "chmod +x " . $client . "_update.sh; mv -f " . $client . "_update.sh /home/scripts;";
        $output = array();
        exec($command, $output);
        return $result > 0;
    }

    public function action_generate_script()
    {
        $json_url = Arr::get($_REQUEST, 'json_url', NULL);
        $id = Arr::get($_REQUEST, 'id', NULL);

//		$json_url = $this->_generate_json_url($client, $json_url);

        $result = DB::select('json_url', 'system_name')
            ->from('clients')
            ->where('id', '=', $id)
            ->execute()
            ->as_array();
        $client = $result[0]['system_name'];
        if ($result)
        {
            if ($json_url != $result[0]['json_url'])
            {
                $update_query = DB::update('clients')
                    ->set(array(
                        "json_url" => $json_url
                    ))
                    ->where('id', '=', $id)
                    ->execute();
            }
        }

        $status = FALSE;
        if ($client && $json_url)
        {
            $result = $this->_generate_update_script($client, $json_url);
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
        $this->template->content = $output;
    }

    private function _generate_user_database($system_name, $mysql_user, $mysql_password, $consumer_key = NULL, $salt = NULL)
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
                'consumer_key' => $consumer_key,
                'salt' => $salt,
            );

            return PancakeResponse::out(TRUE, 'Successfully created the client ' . $system_name . '. Please save this information in a safe place.', $data);
        }
        catch (Database_Exception $e)
        {
            return PancakeResponse::out(FALSE, $e->getMessage());
        }
    }

    public function action_add()
    {
        if ($_POST)
        {
            $status = FALSE;
            $data = array();
            if (!empty($_POST['system_name']) && !empty($_POST['json_url']) && !empty($_POST['home_url']))
            {
                if (trim(strlen($_POST['system_name'])) > 0)
                {
                    if (strlen($_POST['system_name']) <= 7)
                    {
                        $db = Database::instance();
                        try
                        {
                            $consumer_key = PancakeAuth::generate_signature('system_name', 'json_url', time());
                            $salt = PancakeAuth::generate_signature('system_name', 'home_url', time());
                            $output = $this->_generate_user_database($_POST['system_name'], $_POST['mysql_user'], $_POST['mysql_pass'], $consumer_key, $salt);
                            $result = json_decode($output, TRUE);
                            if ($result['meta']['status'] == 1)
                            {
                                $users = DB::select('u.*')
                                    ->from(array('users', 'u'))
                                    ->join(array('roles_users', 'ru'))
                                    ->on('ru.user_id', '=', 'u.id')
                                    ->join(array('roles', 'r'))
                                    ->on('r.id', '=', 'ru.role_id')
                                    ->where('r.name', '=', 'icg')
                                    ->execute()
                                    ->as_array();
                                
                                $client_result = DB::insert('clients', array('system_name', 'json_url', 'home_url', 'consumer_key', 'salt'))
                                    ->values(array($_POST['system_name'], $_POST['json_url'], $_POST['home_url'], $consumer_key, $salt))
                                    ->execute();
                               
                                
//                                $client = ORM::factory('client');
//                                $client_data = array(
//                                    'system_name' => $_POST['system_name'],
//                                    'json_url' => $_POST['json_url'],
//                                    'home_url' => $_POST['home_url'],
//                                    'consumer_key' => $consumer_key,
//                                    'salt' => $salt,
//                                );
//                                $client->values($client_data);
//                                $client->save();



                                foreach ($users as $user)
                                {
                                    $rel_result = DB::insert('clients_users', array('client_id', 'user_id'))
                                        ->values($client_result[0], $user['id'])
                                        ->execute();
                                }
                            }
                        }
                        catch (Exception $e)
                        {
                            $message = $e->getMessage();
                        }
                    }
                    else
                    {
                        $message = "The system name must 7 characters or less";
                    }
                }
                else
                {
                    $message = "The system name cannot be empty";
                }
            }
            else
            {
                $message = "All fields must be filled out.";
            }
        }
        if (!isset($output))
        {
            $output = PancakeResponse::out($status, $message, $data);
        }

        $this->template->content = $output;
    }

    public function action_list()
    {
        $status = FALSE;
        $data = array();
        $clients = DB::select('*')
            ->from('clients')
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
        $this->template->content = PancakeResponse::out($status, $message, $data);
    }

    public function action_get_home_url()
    {
        $status = FALSE;
        $message = NULL;
        $data = array();
        $uid = $this->user->get_user()->id;

        $clients = DB::select('*')
            ->from('clients_users')
            ->where('user_id', '=', $uid)
            ->execute()
            ->as_array();
        try
        {
            if (count($clients) > 1)
            {
                $data['home_url'] = 'icg/home';
            }
            else
            {
                $results = DB::select('system_name', 'home_url')
                    ->from('clients')
                    ->where('id', '=', $clients[0]['client_id'])
                    ->execute();
                $data['home_url'] = $results[0]['system_name'] . '/' . $results[0]['home_url'];
            }
            $status = TRUE;
        }
        catch (Exception $e)
        {
            $message = $e->getMessage();
        }
        $this->template->content = PancakeResponse::out($status, $message, $data);
    }

}