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
class Controller_Patriots_Ajax_Stand extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;
	public function action_power()
	{
		$stand_name = trim(Arr::get($_REQUEST, 'stand_name'));
		$power_state = (int)Arr::get($_REQUEST, 'power_state');

		$result = $this->_pancake_call('patriots', 'stand', 'power', array(
			'stand_name' => $stand_name,
			'power_state' => $power_state
		));
		echo $result;
	}
	
	public function action_change_tv_model()
	{
		$stand_id = trim(Arr::get($_REQUEST, 'stand_id'));
		$tv_model = Arr::get($_REQUEST, 'tv_model');

		$result = $this->_pancake_call('patriots', 'stand', 'change_tv_model', array(
			'stand_id' => $stand_id,
			'tv_model' => $tv_model
		));
		echo $result;
	}

}