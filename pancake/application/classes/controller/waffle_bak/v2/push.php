<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Waffle_v2_Push extends Controller_Templates_APIv1
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

    // Actions:
    // 1 - update
    // 2 - screenshot
    // 3 - exec
    // 4 - TV Control

    public function action_all_by_client_id()
    {
        $actions = Arr::get($_REQUEST, 'actions', 1); // Default is 1 = update
        $client_id = Arr::get($_REQUEST, 'client_id', NULL);

        $output = WafflePush::all_by_client_id($client_id, $actions);
        $this->template->content = $output;
    }
    
   public function action_all()
    {
        $actions = Arr::get($_REQUEST, 'actions', 1); // Default is 1 = update

        $output = WafflePush::all($actions);
        $this->template->content = $output;
    }

    public function action_hardware()
    {
        $hardware_names = Arr::get($_REQUEST, 'hardware_names', '');
        $actions = Arr::get($_REQUEST, 'actions', 1); // Default is 1 = update
        $client_id = Arr::get($_REQUEST, 'client_id', NULL);

        $output = WafflePush::hardware($actions, $client_id, $hardware_names);
        $this->template->content = $output;
    }

    public function action_profile()
    {
        $profile_names = Arr::get($_REQUEST, 'profile_names', '');
        $actions = Arr::get($_REQUEST, 'actions', 1); // Default is 1 = update
        $client_id = Arr::get($_REQUEST, 'client_id', NULL);        

        $output = WafflePush::profile($actions, $client_id, $profile_names);
        $this->template->content = $output;
    }

}