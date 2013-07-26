<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Waffle_v2_Hardware extends Controller_Templates_APIv1
{

    private $_no_auth_action = array(
        'authorize',
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

    public function action_get_single()
    {
        $hardware_name = Arr::get($_POST, 'hardware_name', '');
        $client_id = Arr::get($_REQUEST, 'client_id', NULL);
        try
        {
            $hardware = WaffleHardware::get_single($hardware_name, $client_id);
            $profiles = WaffleHardware::get_all_profiles_by_id($hardware['id']);
            $hardware['profiles'] = $profiles;
            $data = $hardware;
            $output = PancakeResponse::out(TRUE, NULL, $data);
        }
        catch (Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        $this->template->content = $output;
    }

    public function action_create()
    {
        $name = Arr::get($_POST, 'name', '');
        $client_id = Arr::get($_REQUEST, 'client_id', NULL);
        $tv_model = Arr::get($_REQUEST, 'tv_model', NULL);
        $tv_model_id = Arr::get($_REQUEST, 'tv_model_id', NULL);
        try
        {
            $data = WaffleHardware::create($name, $client_id, $tv_model, $tv_model_id);
            $output = PancakeResponse::out(TRUE, '', $data);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }
    
    public function action_create_tv()
    {
        $tv_model = Arr::get($_REQUEST, 'tv_model', null);
        try
        {
            $data = WaffleHardware::create_tv($tv_model);
            $output = PancakeResponse::out(TRUE, 'Tv Created', $data);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        
        $this->template->content = $output;
    }

    public function action_authorize()
    {
        $code = Arr::get($_REQUEST, 'code', '');
        try
        {
            $result = WaffleHardware::authorize($code);

            $output = PancakeResponse::out(TRUE, null, $result);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        catch (Exception $e)
        {
            echo $e;
        }

        $this->template->content = $output;
    }

    public function action_link_profiles()
    {
        $hardware_id = Arr::get($_POST, 'hardware_id', 0);
        $profile_id = Arr::get($_POST, 'profile_id', 0);

        try
        {
            WaffleHardware::link_profiles($hardware_id, $profile_id);
            $output = PancakeResponse::out(TRUE);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    /**
     *
     */
    public function action_get_profiles()
    {
        $hardware_id = Arr::get($_REQUEST, 'hardware_id', 0);
        if (empty($hardware_id))
        {
            $hardware_id = Arr::get($_REQUEST, 'hardwareid', 9);
        }

        $output = '';

        try
        {
            $result = WaffleHardware::get_all_profiles_by_id($hardware_id);
            $output = PancakeResponse::out(TRUE, null, $result);
        }
        catch (Exception $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    /**
     * Alias for get_profiles
     */
    public function action_list_profiles()
    {
        $this->action_get_profiles();
    }

    public function action_get_all_by_client_id()
    {
        $client_id = Arr::get($_REQUEST, 'client_id', NULL);
        $status = FALSE;
        $data = array();
        if ($client_id)
        {
            $data = WaffleHardware::get_all_by_client_id($client_id);
            $message = "successfully retrieved hardware";
            $status = TRUE;
        }
        else
        {
            $message = "No client specified";
        }
        $output = PancakeResponse::out($status, $message, $data);
        $this->template->content = $output;
    }

    public function action_update()
    {
        $hardware_name = Arr::get($_REQUEST, 'hardware_name', NULL);
        $status = Arr::get($_REQUEST, 'status', NULL);
        $system_name = Arr::get($_REQUEST, 'system_name', NULL);

        $pancake_status = FALSE;
        $message = NULL;
        if ($hardware_name && isset($status) && $system_name)
        {
            $client = WaffleClients::get_client_by_system_name($system_name);
            if ($client)
            {
                $client_id = $client['client_id'];
                $cache_exists = WaffleStatus::hardware_cache_exists($hardware_name, $client_id);
                if ($cache_exists)
                {
                    $success = WaffleStatus::update($hardware_name, $client_id, $status);
                }
                else
                {
                    $success = WaffleStatus::create($hardware_name, $client_id, $status);
                }

                if ($success)
                {

//                    This resumes the push. Should be uncommented after waffle is tested.
//                                     
                    if ($status == 1)
                    {
                        $latest_queue = WaffleQueue::get_latest($client_id, $hardware_name);
                        if ($latest_queue && intval($latest_queue['status_code']) != 4005)
                        {
                            $result = WaffleQueue::update($latest_queue['id'], 2002, "Last queue was not completed. Resuming execution of queue with id: " . $latest_queue['id']);
                            $encoded_result = WafflePush::resume_queue_by_hardware_name($latest_queue['id'], $client_id, array($hardware_name));
                            $result = json_decode($encoded_result, TRUE);
                            if (!$result['meta']['status'])
                            {
                                WaffleQueue::update($latest_queue['id'], 2004, "Retry of queue with id: " . $latest_queue['id'] . " failed to send. Error: " . $result['meta']['message']);
                            }
                            else
                            {
                                WaffleQueue::update($latest_queue['id'], 2005, "Retry of queue with id: " . $latest_queue['id'] . " successfully sent.");
                            }
                        }
                    }
                    $pancake_status = TRUE;
                }
                else
                {
                    $message = "Error updating the status.";
                }
            }
            else
            {
                $message = "Invalid system name";
            }
        }
        else
        {
            $message = "Hardware name, status, or system name not set.";
        }

        $output = PancakeResponse::out($pancake_status, $message);
        $this->template->content = $output;
    }

    /**
     * Get a list of all hardware queues
     */
    public function action_get_all_hardware_queues()
    {
        try
        {
            $results = WaffleHardware::get_all_hardware_queues();
            $output = PancakeResponse::out(TRUE, null, $results);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    /**
     * Get a list of all hardware statuses in the waffle status queue.
     */
    public function action_get_all_hardware_statuses()
    {
        try
        {
            $results = WaffleHardware::get_all_hardware_statuses();
            $output = PancakeResponse::out(TRUE, null, $results);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    public function action_get_client_hardware_statuses()
    {
        try
        {
            $client_id = Arr::get($_REQUEST, 'client_id', false);
            $results = WaffleHardware::get_client_hardware_statuses($client_id);
            $output = PancakeResponse::out(TRUE, null, $results);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    public function action_get_single_hardware_status()
    {
        try
        {
            $client_id = Arr::get($_REQUEST, 'client_id', false);
            $hardware_name = Arr::get($_REQUEST, 'hardware_name', false);

            if ($client_id && $hardware_name)
            {
                $results = WaffleHardware::get_single_hardware_status($client_id, $hardware_name);
                $output = PancakeResponse::out(true, null, $results);
            }
            else
            {
                $output = PancakeResponse::out(FALSE, 'client_id and hardware_name must be passed to action_get_single_hardware_status in hardware.php');
            }
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

}