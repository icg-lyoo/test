<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Waffle_v2_Profile extends Controller_Templates_APIv1
{

    private $_no_auth_action = array(
    );

    public function before()
    {
        // No authentication is required to access the following calls
        if (in_array($this->request->action(), $this->_no_auth_action))
        {
            $this->_auth_required = FALSE;
        }

        parent::before();
    }

    private function _add_new_profile($name, $extract_path, $launch, $update_interval, $auto_launch, $tz_offset, $push_url, $push_zone, $push_room, $client_id = NULL)
    {
        $profile_data['name'] = $name;
        $profile_data['extract_path'] = $extract_path;
        $profile_data['launch'] = $launch;
        $profile_data['update_interval'] = $update_interval;
        $profile_data['auto_launch'] = $auto_launch;
        $profile_data['tz_offset'] = $tz_offset;
        $profile_data['push_url'] = $push_url;
        $profile_data['push_zone'] = $push_zone;
        $profile_data['push_room'] = $push_room;

        try
        {
            $data = WaffleProfile::create($profile_data, $client_id);
            $output = PancakeResponse::out(TRUE, '', $data);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        return $output;
    }

    private function _add_hardware($hardware_id, $profile_id, $client_id)
    {
        try
        {
            WaffleHardware::link_profiles($hardware_id, $profile_id, $client_id);
            $output = PancakeResponse::out(TRUE);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        return $output;
    }

    public function action_create()
    {
        $name = Arr::get($_REQUEST, 'name');
        $extract_path = Arr::get($_REQUEST, 'extract_path');
        $launch = Arr::get($_REQUEST, 'launch');
        $update_interval = Arr::get($_REQUEST, 'update_interval');
        $auto_launch = Arr::get($_REQUEST, 'auto_launch');
        $tz_offset = Arr::get($_REQUEST, 'tz_offset');
        $push_url = Arr::get($_REQUEST, 'push_url');
        $push_zone = Arr::get($_REQUEST, 'push_zone');
        $push_room = Arr::get($_REQUEST, 'push_room');
        $client_id = Arr::get($_REQUEST, 'client_id', NULL);
        $output = $this->_add_new_profile($name, $extract_path, $launch, $update_interval, $auto_launch, $tz_offset, $push_url, $push_zone, $push_room, $client_id);

        $this->template->content = $output;
    }

    public function action_create_and_link_hardware()
    {
        $name = Arr::get($_REQUEST, 'name');
        $extract_path = Arr::get($_REQUEST, 'extract_path');
        $launch = Arr::get($_REQUEST, 'launch');
        $update_interval = Arr::get($_REQUEST, 'update_interval');
        $auto_launch = Arr::get($_REQUEST, 'auto_launch');
        $tz_offset = Arr::get($_REQUEST, 'tz_offset');
        $push_url = Arr::get($_REQUEST, 'push_url');
        $push_zone = Arr::get($_REQUEST, 'push_zone');
        $push_room = Arr::get($_REQUEST, 'push_room');
        $hardware_id = Arr::get($_POST, 'hardware_id', 0);
        $client_id = Arr::get($_POST, 'client_id', NULL);

        $encoded_output = $this->_add_new_profile($name, $extract_path, $launch, $update_interval, $auto_launch, $tz_offset, $push_url, $push_zone, $push_room, $client_id);
        $decoded_output = json_decode($encoded_output, TRUE);
        if ($decoded_output['meta']['status'])
        {
            try
            {
                $output = $this->_add_hardware($hardware_id, $decoded_output['data'][0], $client_id);
            }
            catch (Exception $e)
            {
                $output = PancakeResponse::out(FALSE, $e->getMessage());
            }
            $this->template->content = $output;
        }
        else
        {
            $this->template->content = $encoded_output;
        }
    }

    public function action_link_hardware()
    {
        $hardware_id = Arr::get($_POST, 'hardware_id', 0);
        $profile_id = Arr::get($_POST, 'profile_id', 0);
        $client_id = Arr::get($_POST, 'client_id', NULL);

        $output = $this->_add_hardware($hardware_id, $profile_id, $client_id);

        $this->template->content = $output;
    }

    public function action_get_all_by_client_id()
    {
        $client_id = Arr::get($_REQUEST, 'client_id', NULL);

        try
        {
            $results = WaffleProfile::get_all_by_client_id($client_id);
            $output = PancakeResponse::out(TRUE, null, $results);
        }
        catch (Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        $this->template->content = $output;
    }

    public function action_get_all_hardware_by_name()
    {
        $profile_name = Arr::get($_POST, 'profile_name', 0);

        try
        {
            $results = WaffleProfile::list_hardware($profile_name);
            $output = PancakeResponse::out(TRUE, null, $results);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    /**
     * action to retrieve results from get_all_profiles
     *
     * Outputs array of profiles
     */
    public function action_get_all_profiles()
    {
        try
        {
            $clients = WaffleClients::get_all_clients();
            $results = WaffleProfile::get_all_profiles($clients);
            $output = PancakeResponse::out(TRUE, null, $results);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    /**
     * action to retrieve all hardware statuses for all profiles
     *
     * Outputs array of profiles
     */
    public function action_get_all_profile_statuses()
    {
        try
        {
            $results = WaffleProfile::get_all_profile_statuses();
            $output = PancakeResponse::out(TRUE, null, $results);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }
    
    public function action_search_profile()
    {
        try
        {
            $search = Arr::get($_REQUEST, 'search', 'NULL', '');
            $client_id = Arr::get($_REQUEST, 'client_id', '');
            if(!empty($search))
            {
                $results = DB::select('name')
                    ->from('w_profiles')
                    ->where('name', 'LIKE', '%' . $search . '%')
                    ->execute(PancakeClient::database_instance($client_id))
                    ->as_array();
                if(!empty($results))
                    $output = PancakeResponse::out(TRUE, null, $results[0]);
                else
                    $output = PancakeResponse::out(FALSE, 'No profiles found');
            }
            else
            {
                $output = PancakeResponse::out(FALSE, 'no search term provided');
            }
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

}