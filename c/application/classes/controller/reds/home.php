<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author equemuel
 */
class Controller_Reds_Home extends Controller_ICG_v1_ICG
{

    protected $login_page = "icg/login";

    public function action_index()
    {


        function sortStands(&$v1, &$v2)
        {

            return (strtolower($v1['stand_name']) == strtolower($v2['stand_name'])) ?
                strnatcmp($v1['stand_name'], $v2['stand_name']) :
                strnatcasecmp($v1['stand_name'], $v2['stand_name']);
        }

        $encoded_response = $this->_pancake_call('auth', 'user', 'get_roles', array(), 1, FALSE);
        $decoded_response = json_decode($encoded_response, TRUE);
        $decoded_roles = $decoded_response['data'];
        $is_icg_user = FALSE;

        if (isset($decoded_roles) && !empty($decoded_roles))
        {

            foreach ($decoded_roles as $role)
            {
                if(strtolower($role['name']) == 'developer')
                {
                    $is_icg_user = TRUE;
                    break;
                }
            }
        }
        
        $view = View::factory('reds/template');
        $view->is_icg_user = $is_icg_user;
        $encoded_results = $this->_pancake_call('reds', 'home', 'getStands', $data = array());
        $decoded_results = json_decode($encoded_results, true);

        if ($decoded_results['meta']['status'] == TRUE)
        {

            //sorts stands naturally 1,2,2a,2b,2c,12,20, etc..
            usort($decoded_results['data'], 'sortStands');
        }
        else
        {
            echo $decoded_results['meta']['message'];
        }

        $view->stands = $decoded_results['data'];
        $this->response->body($view);
    }

}
?>
