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
class Controller_Patriots_Ajax_MenuItems extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;
    
//        public function action_set_disclaimer()
//        {
//            $zone_id = Arr::get($_REQUEST, 'zone_id');
//            
//            $success_flag = $this->_pancake_call('patriots', 'event', 'set_disclaimer', $zone_id);
//            
//            echo $success_flag;
//        }
        
	public function action_get_menuitems_for_event()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');

		$menu_items = $this->_pancake_call('patriots','event', 'get_menu_items', array('event_id' => $event_id));

		echo $menu_items;
	}

	public function action_set_menuitems_for_event()
	{
                $data['session_id'] = $_REQUEST['session_id'];
                $data['data'] = json_encode($_REQUEST);
                $data['event_id'] = $_REQUEST['event_id'];
                $data['change-event'] = $_REQUEST['change-event'];

        $success_flag = $this->_pancake_call('patriots', 'event', 'set_menus_items', $data);

		echo $success_flag;

		//pancake api - set_menu_item_price ($event_id, $menu_item_price_id, $value)
		//pancake api - set_menu_item_title ($event_id, $menu_item_id, $value)
	}

	public function action_add_new_menuitem()
	{
		$data = $_REQUEST;

        $success_flag = $this->_pancake_call('patriots', 'event', 'add_new_menuitem', $data);

		echo $success_flag;
	}

	public function action_add_menuitems_to_event()
	{
		$data = $_REQUEST;

		$success_flag = $this->_pancake_call('patriots', 'event', 'add_menuitem_to_event', $data);

		echo $success_flag;
	}

	public function action_change_sort()
	{
		$data = array(
			'menu_id' => Arr::get($_REQUEST, 'menu_id'),
			'sort_values' => json_encode(Arr::get($_REQUEST, 'sort_values'))
		);

		$success_flag = $this->_pancake_call('patriots', 'menu', 'change_menu_item_sort', $data);

		echo $success_flag;
	}

	public function action_add_subtitle()
	{
		$menu_item_id = Arr::get($_REQUEST, 'menu_item_id');
		$subtitle = Arr::get($_REQUEST, 'subtitle');

		$success_flag = $this->_pancake_call('patriots', 'menu', 'add_subtitle_to_menu_item', array('menu_item_id' => $menu_item_id, 'subtitle' => $subtitle));

		echo $success_flag;
	}

	public function action_save_menu_item()
	{
		$m_id = Arr::get($_REQUEST, 'm_id');
		$title = Arr::get($_REQUEST, 'title');
		$original = Arr::get($_REQUEST, 'original');
        $mi_id = Arr::get($_REQUEST, 'mi_id');

        $success_flag = $this->_pancake_call('patriots', 'menu', 'change_menu_item', array(
			'm_id' => $m_id,
            'mi_id' => $mi_id,
			'title' => $title,
			'original' => $original
			));

		echo $success_flag;
	}
	
	public function action_remove_menu_item()
	{
		$id = Arr::get($_REQUEST, 'id');
		
		$success_flag = $this->_pancake_call('patriots', 'menu', 'remove_menu_item', array('id' => $id));
		echo $success_flag;
	}
	
	public function action_add_menu_item()
	{
		$menu_id = Arr::get($_REQUEST, 'menu_id');
		$success_flag = $this->_pancake_call('patriots', 'menu', 'add_menu_item', array('menu_id' => $menu_id));
		echo $success_flag;
	}

}