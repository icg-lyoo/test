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
class Controller_Patriots_Ajax_Theme extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;
	public function action_get_parent_id()
	{
		$theme_id = Arr::get($_REQUEST, 'theme_id');
		echo $this->_pancake_call('patriots', 'theme', 'get_parent_id', array('theme_id'=>$theme_id));
	}
        
    public function action_add()
    {
        $theme_id = Arr::get($_REQUEST, 'theme_id');
        $subtheme_name = Arr::get($_REQUEST, 'subtheme_name');

        echo $this->_pancake_call('patriots', 'theme', 'add', array('theme_id' => $theme_id, 'subtheme_name' => $subtheme_name));

    }
}