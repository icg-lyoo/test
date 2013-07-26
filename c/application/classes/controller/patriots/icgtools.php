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
class Controller_Patriots_Icgtools extends Controller_ICG_v1_ICG
{

	public function before()
	{
		parent::before();
	}
	
	public function action_logout()
	{
		$result = json_decode($this->_pancake_call('auth', 'user', 'logout'), true);
		if($result['meta']['status'] == 1)
		{
			Cookie::set('session_id', NULL);
//			Request::current()->redirect('icg/login');
			$output = json_encode(true);
		}
		else
		{
			$output = false;
		}
		echo $output;
	}

	public function action_index()
	{
		$result = json_decode($this->_pancake_call('auth', 'user', 'is_admin'), TRUE);
		$admin = (bool)$result['meta']['status'];
		
		
		$stands = json_decode($this->_pancake_call('patriots', 'stand', 'get_all_themes_subthemes'), true);

		
		$themes = json_decode($this->_pancake_call('patriots', 'theme', 'get_all'));
		$view = View::factory('patriots/icgtools');
		$view->stands = $stands;
		$view->themes = $themes;
		$view->admin = $admin;
		$this->response->body($view);
	}


}
