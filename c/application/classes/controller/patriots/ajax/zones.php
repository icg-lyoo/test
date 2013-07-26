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
class Controller_Patriots_Ajax_Zones extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;
	public function action_change_sort()
	{
		$zones = Arr::get($_REQUEST, 'zones');
		
		$success_flag = $this->_pancake_call('patriots', 'zone', 'change_sort', array('zones' => json_encode($zones)));
		echo $success_flag;
	}
	
	public function action_add()
	{
		$type = Arr::get($_REQUEST, 'type');
		$sort = Arr::get($_REQUEST, 'sort');
		$subtheme = Arr::get($_REQUEST, 'subtheme');
		$css_class = Arr::get($_REQUEST, 'css_class');
		$type_detail = Arr::get($_REQUEST, 'type_detail');
        $disclaimer = Arr::get($_REQUEST, 'disclaimer');
		
		$success_flag = $this->_pancake_call('patriots', 'zone', 'add', array(
			'type' => $type,
            'disclaimer' => $disclaimer,
            'type_detail' => $type_detail,
			'sort' => $sort,
			'subtheme' => $subtheme,
			'css_class' => $css_class
			));
		echo $success_flag;
	}
	
	public function action_remove()
	{
		$id = Arr::get($_REQUEST, 'id');
		
		$success_flag = $this->_pancake_call('patriots', 'zone', 'remove', array('id' =>$id));
		echo $success_flag;
	}
        
    public function action_set_disclaimer()
    {

        $theme_id = Arr::get($_REQUEST, 'theme_id');
        $disclaimer = Arr::get($_REQUEST, 'disclaimer');
        $success_flag = $this->_pancake_call('patriots', 'zone', 'set_disclaimer', array('theme_id' => $theme_id, 'disclaimer' => $disclaimer));

        echo $success_flag;
    }
        
    public function action_get_disclaimer()
    {
        $theme_id = Arr::Get($_REQUEST, 'theme_id');
        $success_flag = $this->_pancake_call('patriots', 'zone', 'get_disclaimer', array('theme_id' => $theme_id));

        echo $success_flag;
    }
}