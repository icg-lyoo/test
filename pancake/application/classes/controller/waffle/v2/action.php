<?php

/**
 *
 *
 *
 * @author Richard Martin <rmartin@icginfo.com>
 * @version 1.0
 * @since version
 * @copyright (c) 2012, Internet Connectivity Group
 */
// No direct access
defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Waffle_v2_Action extends Controller_Templates_APIv1
{
    private $_no_auth_action = array('update');

    public function before()
    {
        // No authentication is required to access the following calls
        if (in_array($this->request->action(), $this->_no_auth_action))
        {
            $this->_auth_required = FALSE;
        }

        parent::before();
    }

    public function action_get_all_actions_by_queue_id()
    {
        try
        {
            $queue_id	= Arr::get($_REQUEST, 'queue_id', false);
            $hardware_name	= Arr::get($_REQUEST, 'hardware_name', false);
            $results	= WaffleAction::get_all_actions_by_queue_id_and_hardware_name($queue_id, $hardware_name);
            $output	= PancakeResponse::out(TRUE, null, $results);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    public function action_update()
    {
        $action_id = Arr::get($_REQUEST, 'action_id', NULL);
        $hardware_name = Arr::get($_REQUEST, 'hardware_name', NULL);
        $status_code = intval(Arr::get($_REQUEST, 'status_code', NULL));
        $output = Arr::get($_REQUEST, 'output', '');

        try
        {
            $pancake_output = PancakeResponse::out(WaffleAction::update($action_id, $hardware_name, $status_code, $output));
        }
        catch (Exception $e)
        {
            $pancake_output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        $filename = 'action_update_log/action-' . $action_id . '-' . time();
        $output_string = 'Result: ' . $pancake_output . PHP_EOL . 'action id: ' . $action_id . PHP_EOL . 'Status code: ' . $status_code . PHP_EOL . 'Output: ' . $output;
        file_put_contents($filename, $output_string);
        $this->template->content = $pancake_output;
    }

}
?>
