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

class Controller_Waffle_v2_Clients extends Controller_Templates_APIv1
{

    public function action_get_all_clients()
    {
        try
        {
            $results = WaffleClients::get_all();
            $output = PancakeResponse::out(TRUE, null, $results);
        }
        catch (PancakeException $e)
        {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

    public function action_get_by_system_name() {
        try {
            $results = WaffleClients::get_client_by_system_name(Arr::get($_REQUEST, 'system_name', NULL));
            $output = PancakeResponse::out(TRUE, null, $results);
        } catch (PancakeException $e) {
            $output = PancakeResponse::out(FALSE, $e->getMessage());
        }

        $this->template->content = $output;
    }

}
?>
