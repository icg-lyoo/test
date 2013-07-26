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
class Controller_Icg_Home extends Controller_ICG_v1_ICG
{
    protected $login_page = "icg/login";

	public function action_index()
	{
        $result = $this->_pancake_call('auth', 'client', 'list',array(), 1,1);
   
        $view = View::factory('icg/controlPanel');
        $view->clients = (isset($result['data'])) ? $result['data'] : array();
		$this->response->body($view); 
	}
}