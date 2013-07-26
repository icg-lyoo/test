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
class Controller_Patriots_Ajax_Event extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;
    
	public function action_index()
	{
		echo 'hello';
	}
	public function action_set_active()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');
		echo $this->_pancake_call('patriots', 'event','set_active', array('event_id'=>$event_id));
	}
	public function action_get_active()
	{
		echo $this->_pancake_call('patriots', 'event','get_active');
	}
	public function action_get_all_active_menu_items()
	{
		echo $this->_pancake_call('patriots', 'event', 'get_all_active_menu_items');
	}
}