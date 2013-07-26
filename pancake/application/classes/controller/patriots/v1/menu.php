<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Menu extends Controller_Templates_APIv1
{
        public function action_get_menu_item_description()
        {
                $menu_item_id = Arr::get($_REQUEST, 'menu_item_id');
                $is_menus_menus_items_id = Arr::get($_REQUEST, 'is_menus_menus_items_id');
                
                $success = FALSE;
                 
                if($is_menus_menus_items_id)
                {
                    $description = DB::select('description')
                                    ->from('menus_menus_items')
                                    ->join('menus_items', 'LEFT')
                                    ->on('menus_menus_items.menu_id', '=', 'menus_items.id')
                                    ->where('menus_menus_items.id', '=', $menu_item_id)
                                    ->execute($this->client['database'])
                                    ->as_array();
                    

                    $output = $description[0]['description'];
                    $success = TRUE;
                }
                else 
                {
                    $description = DB::select('description')
                            ->from('menus_items')
                            ->where('id', '=', $menu_item_id)
                            ->execute($this->client['database'])
                            ->as_array();

                    $output = $description[0]['description']; 
                    $success = TRUE;
                }
                
                $this->template->content = $output;
        }
        
	public function action_add_menu_item()
	{
		$menu_id = Arr::get($_REQUEST, 'menu_id');
		
		$success = true;
		
		$default_menu_item = DB::select('id')
			->from('menus_items')
			->where('title', '=', 'Menu Item Title')
			->execute($this->client['database'])
			->as_array();
		$menuitem_sort = DB::select('*')
			->from('menus_menus_items')
			->where('menu_id', '=', $menu_id)
			->execute($this->client['database'])
			->as_array();
		
		$sort = count($menuitem_sort) + 1;
		
		if($default_menu_item)
		{
			$add = DB::insert('menus_menus_items', array('menu_id', 'menu_item_id', 'sort'))
				->values(array($menu_id, $default_menu_item[0]['id'], $sort))
				->execute($this->client['database']);
			if(!$add)
			{
				$success = false;
			}
		}
		else
		{
			$add[0] = false;
		}
		$output = json_encode($add[0]);
		$this->template->content = $output;
	}
	
	public function action_remove_menu_item()
	{
		$success = true;
		$id = Arr::get($_REQUEST, 'id');
		
		$del_mi_rel = DB::delete('menus_menus_items')
			->where('id', '=', $id)
			->execute($this->client['database']);
		if(!$del_mi_rel)
		{
			$success = false;
		}
		$output = json_encode($success);
		$this->template->content = $output;
	}
	
	public function action_change_menu_item()
	{
		$id = Arr::get($_REQUEST, 'm_id');
		$title = Arr::get($_REQUEST, 'title');
		$original = Arr::get($_REQUEST, 'original');
                $mi_id = Arr::get($_REQUEST, 'mi_id');

		$mmi_id = DB::select('mmi.id')
			->from(array('menus_menus_items', 'mmi'))
			->join(array('menus_items', 'mi'))
			->on('mi.id', '=', 'mmi.menu_item_id')
			->where('mmi.menu_id', '=', $id)
			->and_where('mi.title', '=', $original)
			->execute($this->client['database'])
			->as_array();
                
		$mmi_id = $mmi_id[0]['id'];

		$new_id = DB::select('id')
			->from('menus_items')
			->where('id', '=', $mi_id)
			->execute($this->client['database'])
			->as_array();
		
		$update = DB::update('menus_menus_items')
			->set(array('menu_item_id' => $new_id))
			->where('id', '=', $mmi_id)
			->execute($this->client['database']);
		
		$results = json_encode($update);
		
		$output = json_encode($results);
		$this->template->content = $output;
			
	}
	
	public function action_change_menu_title()
	{
		$success = true;
		$menu_id = Arr::get($_REQUEST, 'menu_id');
		$title = Arr::get($_REQUEST, 'title');
		
		$change = DB::update('menus')
			->set(array('title'=> $title))
			->where('id', '=', $menu_id)
			->execute($this->client['database']);
		if(!$change)
		{
			$success = false;
		}
		
		$output = json_encode($success);
		$this->template->content = $output;
	}
	
	public function action_change_sort()
	{
		$menus = json_decode(Arr::get($_REQUEST, 'menus'));
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		
		$i = 0;
		foreach($menus as $menu)
		{
			$results = DB::update('zones_content')
			->set(array('sort' => $i))
			->where('type', '=', 'menu')
			->and_where('content_id', '=', $menu)
			->and_where('zone_id', '=', $zone_id)
			->execute($this->client['database']);
			$i++;
		}
		
		$output = json_encode(true);
		$this->template->content = $output;
	}

	public function action_change_menu_item_sort()
	{
		$menu_id = $_REQUEST['menu_id'];
		$sort_values = stripcslashes($_REQUEST['sort_values']);
		$sort_values = json_decode(stripcslashes($sort_values), true);
		
		$sort = 1;
		$success = true;
		
		foreach($sort_values as $item)
		{
			$item = str_replace('&amp;', '&', $item);
			if($item == null || $item == 'null') continue;
			$results = DB::select('id')
				->from('menus_items')
				->where('title', '=', $item)
				->execute($this->client['database'])
				->as_array();
			if(!$results)
			{
				$success = false;
			}
			
			$menu_item_id = $results[0]['id'];
			$results = DB::update('menus_menus_items')
			->set(array('sort' => $sort))
			->where('menu_id', '=', $menu_id)
			->and_where('menu_item_id', '=', $menu_item_id)
			->execute($this->client['database']);
			if(!$results)
			{
				$success = false;
			}
			$sort++;
		}
		
		$output = json_encode($success);
		$this->template->content = $output;
	}
	
	public function action_add_subtitle_to_menu_item()
	{
		$menu_item_id = Arr::get($_REQUEST, 'menu_item_id');
		$subtitle = Arr::get($_REQUEST, 'subtitle');
		
		$result = DB::insert('subtitle', array('subtitle', 'menu_item_id'))
			->values(array($subtitle, $menu_item_id))
			->execute($this->client['database']);
		
		$output = (($result) ? true : false);
		$this->template->content = json_encode($output);
	}

}
