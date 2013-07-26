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

class Controller_Waffle_v2_Status extends Controller_Templates_APIv1
{

    /**
     * Fetches all MMS profiles for a selected client from the client database, and all
     * results for that client in the profile_status_cache table of the waffle database.
     * Combines the data from both tables for display.
     */
    public function action_get_all_statuses_by_client_id()
    {

        // The client id selected
        if ($client_id = Arr::get($_POST, 'client_id', false))
        {
            try
            {

                $hardware = WaffleHardware::get_all_by_client_id($client_id);   // List of all hardware for selected client
                $instances = WaffleStatus::get_all_hardware_statuses_by_client_id($client_id);  // List of all instances in the profile cache for selected client
                // Change the keys from numeric to associative based on hardware_name
                $hardware_keyed = array();
                foreach ($hardware as $item)
                {
                    $hardware_keyed[$item['name']] = $item;
                }

                $instances_keyed = array();
                foreach ($instances as $item)
                {
                    $instances_keyed[$item['hardware_name']] = $item;
                }


                // Merge the arrays
                $results = array_merge_recursive($hardware_keyed, $instances_keyed);


                // Format the results
                foreach ($results as $key => $value)
                {
                    // Add Offline as a status if no status is available
                    if (!array_key_exists('status', $results[$key]))
                    {
                        $results[$key]['status'] = 'Offline';
                    }
                }

                // Send the data back to the requesting client
                $output = PancakeResponse::out(TRUE, null, $results);
            }
            catch (PancakeException $e)
            {
                $output = PancakeResponse::out(FALSE, $e->getMessage());
            }
        }
        else
        {
            try
            {
                $all_hardware_statuses = WaffleHardware::get_all_hardware_statuses_by_clei();
                $output = PancakeResponse::out(TRUE, null, $all_hardware_statuses);
            }
            catch (PancakeException $e)
            {
                $output = PancakeResponse::out(FALSE, $e->getMessage());
            }
        }

        $this->template->content = $output;
    }

}
?>
