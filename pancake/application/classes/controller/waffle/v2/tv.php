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

class Controller_Waffle_v2_Tv extends Controller_Templates_APIv1
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

    public function action_get_all()
    {
        try
        {
            $tvs = DB::select('*')
                ->from('tvs')
                ->execute('waffle')
                ->as_array();

            $pancake_output = PancakeResponse::out(TRUE, NULL, $tvs);
        }
        catch (Exception $e)
        {
            $pancake_output = PancakeResponse::out(FALSE, $e->getMessage());
        }
        $this->template->content = $pancake_output;
    }

    public function action_create()
    {
        $tv_name = Arr::get($_REQUEST, 'name', null);
        if(!$tv_name)
        {
            $pancake_output = PancakeResponse::out(FALSE, 'Name is not set.');
        }
        else
        {
            try
            {
                $tvs = DB::insert('tvs', array('name'))
                    ->values($tv_name)
                    ->execute('waffle');
                if($tvs)
                    $pancake_output = PancakeResponse::out(TRUE, NULL, $tvs);
                else
                    $pancake_output = PancakeResponse::out(FALSE, 'Error creating the tv.');
            }
            catch (Exception $e)
            {
                $pancake_output = PancakeResponse::out(FALSE, $e->getMessage());
            }
            
        }
        $this->template->content = $pancake_output;
    }

}
?>
