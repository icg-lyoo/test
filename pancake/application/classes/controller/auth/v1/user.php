<?php

defined('SYSPATH') or die('No direct access');

class Controller_Auth_v1_User extends Controller_Auth_v1_Auth
{
    public function action_list()
    {
        $users = DB::select('*')
            ->from('users')
            ->execute()
            ->as_array();
        foreach ($users as &$user)
        {
            $roles = DB::select('r.*')
                ->from(array('roles', 'r'))
                ->join(array('roles_users', 'ru'))
                ->on('r.id', '=', 'ru.role_id')
                ->where('ru.user_id', '=', $user['id'])
                ->execute()
                ->as_array();
            $user['roles'] = $roles;

            $clients = DB::select('c.*')
                ->from(array('clients', 'c'))
                ->join(array('clients_users', 'cu'))
                ->on('cu.client_id', '=', 'c.id')
                ->where('cu.user_id', '=', $user['id'])
                ->execute()
                ->as_array();
            $user['clients'] = $clients;
        }
        $this->template->content = PancakeResponse::out(TRUE, NULL, $users);
    }

    public function action_get_roles()
    {
        $pancake_status = FALSE;
        $message = NULL;
        $data = array();
        $uid = $this->user->get_user()->id;
        if ($uid)
        {
            $roles = DB::select('r.*')
                ->from(array('roles', 'r'))
                ->join(array('roles_users', 'ru'))
                ->on('ru.role_id', '=', 'r.id')
                ->where('ru.user_id', '=', $uid)
                ->execute()
                ->as_array();
            if ($roles)
            {
                $pancake_status = TRUE;
                $data = $roles;
            }
            else
            {
                $message = 'No roles found for that user id';
            }
        }
        else
        {
            $message = 'Invalid user id';
        }
        $output = PancakeResponse::out($pancake_status, $message, $data);
        $this->template->content = $output;
    }

    public function action_add()
    {
        $status = FALSE;
        $message = "";
        try
        {
            $user_data['email'] = Arr::get($_POST, 'email', NULL);
            $user_data['username'] = Arr::get($_POST, 'username', NULL);
            $user_data['password'] = Arr::get($_POST, 'password', NULL);
            $user_data['password_confirm'] = Arr::get($_POST, 'password_confirm', NULL);
            $user_data['temp_user'] = Arr::get($_POST, 'temp_user', NULL);

            $roles = Arr::get($_POST, 'roles', array());
            $clients = Arr::get($_POST, 'clients', array());

            $user = ORM::factory('user');
            $user->values($user_data);
            $user->save();

            foreach ($clients as $client_id)
            {
                $user->add('clients', $client_id);
//                                $result = DB::insert('client_has_user', array('client_id', 'user_id'))
//                                        ->values(array($client_id, intval($user->id)))
//                                        ->execute();
//                                if (!$result)
//                                {
//                                        $message .= "Failed to add client with id: " . $client_id . "\n";
//                                }
            }

            foreach ($roles as $role_id)
            {
                $user->add('roles', $role_id);
            }


            $status = TRUE;
            $message .= "Successfully added user.";
        }
        catch (Exception $e)
        {
            $message = $e->getMessage();
        }

        $this->template->content = PancakeResponse::out($status, $message);
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
        $this->template->content = $output;
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
        $this->template->content = $output;
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
            $session_id = PancakeAuth::login($username, $password, $remember);

            try
            {

                if ($session_id)
                {
                    $user = Auth::instance();
                    $uid = $user->get_user()->id;
                    $clients = DB::select('*')
                        ->from('clients_users')
                        ->where('user_id', '=', $uid)
                        ->execute()
                        ->as_array();

                    if (count($clients) > 1)
                    {
                        $home_url = 'icg/home';
                    }
                    else
                    {
                        $results = DB::select('system_name', 'home_url')
                            ->from('clients')
                            ->where('id', '=', $clients[0]['client_id'])
                            ->execute();
                        $home_url = $results[0]['system_name'] . '/' . $results[0]['home_url'];
                    }
                    $output = PancakeResponse::out(TRUE, 'Login Successful', array('session_id' => $session_id, 'home_url' => $home_url));
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
        $this->template->content = $output;
    }

    public function action_add_role()
    {
        $role_id = Arr::get($_POST, 'role_id', NULL);
        $user_id = Arr::get($_POST, 'user_id', NULL);

        try
        {
            $result = DB::insert('roles_users', array('user_id', 'role_id'))
                ->values(array($user_id, $role_id))
                ->execute();
            if ($result)
            {
                $output = PancakeResponse::out(TRUE, NULL);
            }
            else
            {
                $output = PancakeResponse::out(FALSE, 'insert failed');
            }
        }
        catch (Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        $this->template->content = $output;
    }

    public function action_remove_role()
    {
        $role_id = Arr::get($_POST, 'role_id', NULL);
        $user_id = Arr::get($_POST, 'user_id', NULL);

        try
        {
            $result = DB::delete('roles_users')
                ->where('user_id', '=', $user_id)
                ->where('role_id', '=', $role_id)
                ->execute();
            if ($result)
            {
                $output = PancakeResponse::out(TRUE, NULL);
            }
            else
            {
                $output = PancakeResponse::out(FALSE, 'insert failed');
            }
        }
        catch (Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        $this->template->content = $output;
    }

    public function action_add_client()
    {
        $client_id = Arr::get($_POST, 'client_id', NULL);
        $user_id = Arr::get($_POST, 'user_id', NULL);

        try
        {
            $result = DB::insert('clients_users', array('user_id', 'client_id'))
                ->values(array($user_id, $client_id))
                ->execute();
            if ($result)
            {
                $output = PancakeResponse::out(TRUE, NULL);
            }
            else
            {
                $output = PancakeResponse::out(FALSE, 'insert failed');
            }
        }
        catch (Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        $this->template->content = $output;
    }

    public function action_remove_client()
    {
        $client_id = Arr::get($_POST, 'client_id', NULL);
        $user_id = Arr::get($_POST, 'user_id', NULL);

        try
        {
            $result = DB::delete('clients_users')
                ->where('user_id', '=', $user_id)
                ->where('client_id', '=', $client_id)
                ->execute();
            if ($result)
            {
                $output = PancakeResponse::out(TRUE, NULL);
            }
            else
            {
                $output = PancakeResponse::out(FALSE, 'insert failed');
            }
        }
        catch (Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        $this->template->content = $output;
    }
    
    public function action_update_password()
    {
        $user_id = Arr::get($_REQUEST, 'user_id', FALSE);
        $password = Arr::get($_REQUEST, 'password', FALSE);
        
        if($password && $user_id)
        {
            $output = PancakeResponse::out(PancakeAuth::update_password($user_id, $password));
        }
        else
        {
            $output = PancakeResponse::out(FALSE, 'The fields "password" and "user_id" must be set. Request:' . print_r($_REQUEST, TRUE));
        }
        $this->template->content = $output;
    }
    
    public function action_update_user_info()
    {
        $user_id = Arr::get($_REQUEST, 'user_id', FALSE);
        $username = Arr::get($_REQUEST, 'username', FALSE);
        $email = Arr::get($_REQUEST, 'email', FALSE);
        
        if($user_id)
        {
            $output = PancakeResponse::out(PancakeAuth::update_user_info($user_id, $username, $email));
        }
        else
        {
            $output = PancakeResponse::out(FALSE, 'The field "user_id" must be set. Request:' . print_r($_REQUEST, TRUE));
        }
        $this->template->content = $output;
    }
    
    public function action_delete()
    {
        $user_id = Arr::get($_REQUEST, 'user_id', FALSE);
        
        if($user_id)
        {
            $output = PancakeResponse::out(PancakeAuth::delete_user($user_id));
        }
        else
        {
            $output = PancakeResponse::out(FALSE, 'The field "user_id" must be set. Request:' . print_r($_REQUEST, TRUE));
        }
        $this->template->content = $output;
    }

}
