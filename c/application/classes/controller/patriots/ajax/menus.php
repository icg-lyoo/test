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
class Controller_Patriots_Ajax_Menus extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;
    
    public function action_get_menu_item_description()
    {
            $menu_item_id = Arr::get($_REQUEST, 'menu_item_id');
            $is_menus_menus_items_id = Arr::get($_REQUEST, 'is_menus_menus_items_id');
            
            $success_flag = $this->_pancake_call('patriots', 'menu', 'get_menu_item_description', array('menu_item_id' => $menu_item_id, 'is_menus_menus_items_id' => $is_menus_menus_items_id));
            echo $success_flag;
    }
    
	public function action_save_menu_title()
	{
		$menu_id = Arr::get($_REQUEST, 'menu_id');
		$title = Arr::get($_REQUEST, 'title');
		
		$success_flag = $this->_pancake_call('patriots', 'menu', 'change_menu_title', array('menu_id' => $menu_id, 'title' => $title));
		echo $success_flag;
	}
	
	public function action_add_menu()
	{
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		$title = Arr::get($_REQUEST, 'title');
        $type_detail = Arr::get($_REQUEST, 'type_detail');
		
		$success_flag = $this->_pancake_call('patriots', 'zone', 'add_menu', array('zone_id' => $zone_id, 'title' => $title, 'type_detail' => $type_detail));
		echo $success_flag;
	}
	
	public function action_remove_menu()
	{
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		$menu_id = Arr::get($_REQUEST, 'menu_id');
		
		$success_flag = $this->_pancake_call('patriots', 'zone', 'remove_menu', array('zone_id' => $zone_id, 'menu_id' => $menu_id));
		echo $success_flag;
	}
	
	public function action_change_sort()
	{
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		$menus = json_encode(Arr::get($_REQUEST, 'menus'));
		
		$success_flag = $this->_pancake_call('patriots', 'menu', 'change_sort', array('zone_id' => $zone_id, 'menus' => $menus));
		echo $success_flag;
	}
}