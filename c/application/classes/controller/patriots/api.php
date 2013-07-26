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
class Controller_Patriots_Api extends Controller_ICG_v1_ICG
{

	public function action_get_stand_content()
	{
		$stand_id = Arr::get($_REQUEST, 'stand_id');

		echo $this->_pancake_call('patriots', 'api', 'get_stand_content', array('stand_id' => $stand_id));
	}
	
	public function action_get_subtheme_content()
	{
		$subtheme_id = Arr::get($_REQUEST, 'subtheme_id');
		echo $this->_pancake_call('patriots', 'theme', 'get_content', array('subtheme_id' => $subtheme_id));
	}
}

?>
