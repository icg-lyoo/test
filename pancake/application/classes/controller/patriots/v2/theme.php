<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Theme extends Controller_Templates_APIv1
{

	public function action_get_parent_id()
	{
		$id = Arr::get($_REQUEST, 'theme_id');
		$result = DB::select('parent_theme_id')
			->from('themes')
			->where('id', '=', $id)
			->as_assoc()
			->execute($this->client['database']);
		$output = json_encode($result[0]['parent_theme_id']);
		$this->template->content = $output;
	}

	public function action_get()
	{
		$id = Arr::get($_REQUEST, 'id', '');

		$results = DB::select('id', 'name', 'css_class')
			->from('themes')
			->where('id', '=', $id)
			->execute($this->client['database'])
			->as_array();

		$output = json_encode($results);
		$this->template->content = $output;
	}

	public function action_get_parent_themes()
	{
		$results = DB::select('id', 'name', 'css_class', 'parent_theme_id')
			->from('themes')
			->order_by('name', 'ASC')
			->execute($this->client['database'])
			->as_array();
		$parent_themes = array();
		foreach ($results as $result)
		{
			if (!$result['parent_theme_id'])
			{
				$parent_themes[] = $result;
			}
		}
		$output = json_encode($parent_themes);
		$this->template->content = $output;
	}

	public function action_get_all()
	{
		$results = DB::select('id', 'name', 'css_class', 'parent_theme_id')
			->from('themes')
			->as_assoc()
			->order_by('name', 'ASC')
			->execute($this->client['database']);
		foreach ($results as $result)
		{
			$result_array[] = $result;
		}
		$output = json_encode($result_array);
		$this->template->content = $output;
	}

	public function action_get_subthemes()
	{
		$parent_theme_id = Arr::get($_REQUEST, 'parent_theme_id');
		$results = DB::select('id', 'name')
			->from('themes')
			->where('parent_theme_id', '=', $parent_theme_id)
			->order_by('name', 'ASC')
			->execute($this->client['database'])
			->as_array();
		$output = json_encode($results);
		$this->template->content = $output;
	}

	public function action_get_stands()
	{
		$subtheme_id = Arr::get($_REQUEST, 'subtheme_id');
		if (empty($theme) || !is_numeric($subtheme_id))
		{
			PancakeResponse::out(FALSE, 'Invalid value for subtheme_id.');
			exit;
		}
		if (!$this->_is_subtheme($subtheme_id))
		{
			PancakeResponse::out(FALSE, 'The given theme is not a subtheme.');
			exit;
		}

		$results = DB::select('s.id', 's.number', 's.name')
			->from(array('stands', 's'))
			->join(array('stands_themes', 'st'))
			->on('st.stand_id', '=', 's.id')
			->where('st.theme_id', '=', $subtheme_id)
			->execute($this->client['database'])
			->as_array();

		$output = json_encode($results);

		$this->template->content = $output;
	}

	public function action_set_parent()
	{
		$parent_theme_id = Arr::get($_REQUEST, 'parent_theme_id');
		$theme_id = Arr::get($_REQUEST, 'theme_id');
		$results = DB::update('themes')
			->set('parent_theme_id', '=', $parent_theme_id)
			->where('id', '=', $theme_id)
			->execute();
		if (count($results) > 0)
		{
			$this->template->content = 1;
		}
		else
		{
			$this->template->content = 0;
		}
	}

	public function action_create_subtheme()
	{
		$name = Arr::get($_REQUEST, 'name', NULL);
		$parent_theme_id = Arr::get($_REQUEST, 'parent_theme_id');
		$results = DB::insert('themes', array('name', 'parent_theme_id'))
			->values(array($name, $parent_theme_id))
			->execute();
		if (count($results) > 0)
		{
			$this->template->content = 1;
		}
		else
		{
			$this->template->content = 0;
		}
	}

	public function action_get_content()
	{
		$subtheme_id = Arr::get($_REQUEST, 'subtheme_id');
		if (!$subtheme_id)
		{
			$output = json_encode(FALSE);
			$this->template->content = $output;
		}
		else
		{
			$stands = DB::select('stand_id')
				->from('stands_themes')
				->where('theme_id', '=', $subtheme_id)
				->execute($this->client['database'])
				->as_array();
			if (count($stands) > 0)
			{
				$info = array();
				$info['zones'] = DB::select('z.id', 'sz.sort', 'z.type')
					->from(array('zones', 'z'))
					->join(array('stands_zones', 'sz'))
					->on('sz.zone_id', '=', 'z.id')
					->where('sz.stand_id', '=', $stands[0])
					->order_by('sz.sort', 'ASC')
					->execute($this->client['database'])	
					->as_array();
				foreach ($info['zones'] as &$zone)
				{
					$menus = DB::select('m.title', 'm.id')
						->from(array('menus', 'm'))
						->join(array('zones_content', 'zc'))
						->on('zc.content_id', '=', 'm.id')
						->where('zc.type', '=', 'menu')
						->and_where('zc.zone_id', '=', $zone['id'])
						->order_by('zc.sort', 'ASC')
						->execute($this->client['database'])
						->as_array();

					foreach ($menus as &$menu)
					{
//						$event_menu_items = DB::select(array('mi.id', 'mi_id'), 'mi.title', 'mip.price', array('mmi.id', 'mmi_id'), 'mmi.sort')
//							->from(array('menus_items', 'mi'))
//							->join(array('menus_menus_items', 'mmi'))
//							->on('mi.id', '=', 'mmi.menu_item_id')
//							->join(array('menus_items_prices', 'mip'))
//							->on('mip.menus_items_id', '=', 'mi.id')
//							->join(array('events_items', 'ei'))
//							->on('ei.item_id', '=', 'mip.id')
//							->join(array('events', 'e'))
//							->on('ei.event_id', '=', 'e.id')
//							->where('e.active', '=', 1)
//							->and_where('mi.enabled', '=', 1)
//							->and_where('ei.type', '=', 'menu_item')
//							->and_where('mmi.menu_id', '=', $menu['id'])
//							->order_by('mi.title', 'ASC')
//							->execute($this->client['database'])
//							->as_array();
                                                            
                                                            $all_menu_items = DB::select(array('mi.id', 'mi_id'), 'mi.title', 'mip.price', array('mmi.id', 'mmi_id'), 'mmi.sort')
							->from(array('menus_items', 'mi'))
							->join(array('menus_menus_items', 'mmi'))
							->on('mi.id', '=', 'mmi.menu_item_id')
							->join(array('menus_items_prices', 'mip'))
							->on('mip.menus_items_id', '=', 'mi.id')
							->where('mi.enabled', '=', 1)
							->and_where('mmi.menu_id', '=', $menu['id'])
							->order_by('mmi.sort', 'ASC')
//                                                                      ->group_by(array('mmi.id'))
							->execute($this->client['database'])
							->as_array();
															
							foreach($all_menu_items as &$menu_item)
							{
								$subtitles = DB::select('subtitle', 'stacked')
									->from('subtitle')
									->where('menu_item_id', '=', $menu_item['mi_id'])
									->order_by('subtitle', 'ASC')
									->execute($this->client['database'])
									->as_array();
								$menu_item['subtitle'] = array();
								foreach($subtitles as $subtitle)
								{
									$menu_item['subtitle'][] = array('subtitle' => $subtitle['subtitle'], 'stacked' =>$subtitle['stacked']);
								}
							}
                                                            
//                                                            $temp_menu_arr = array();//$event_menu_items+$all_menu_items;
                                                            
                                                            
                                                            //TODO : create sql to combine both above sql statements
                                                            // currently above gets all menu items and event specific then overrides all with event items
//                                                            foreach($all_menu_items as $all_menu){
//                                                                 $temp_menu_arr[$all_menu['mmi_id']] = $all_menu;
//                                                            }
//                                                            
//                                                            foreach($event_menu_items as $event_menu){
//                                                                 $temp_menu_arr[$event_menu['mmi_id']] = $event_menu;
//                                                            }
                                                            
//						$menu['menu_items'] = array_values($temp_menu_arr);
						$menu['menu_items'] = array_values($all_menu_items);
					}

					$promos = DB::select('pi.name', 'pi.media', 'ppi.sort')
						->from(array('promos_items', 'pi'))
						->join(array('promos_promos_items', 'ppi'))
						->on('pi.id', '=', 'ppi.promos_items_id')
						->join(array('promos', 'p'))
						->on('p.id', '=', 'ppi.promos_id')
						->join(array('zones_content', 'zc'))
						->on('zc.content_id', '=', 'p.id')
						->join(array('events_items', 'ei'))
						->on('ei.item_id', '=', 'pi.id')
						->join(array('events', 'e'))
						->on('ei.event_id', '=', 'e.id')
						->where('e.active', '=', 1)
						->and_where('ei.type', '=', 'promo')
						->and_where('zc.type', '=', 'promo')
						->and_where('zc.zone_id', '=', $zone['id'])
						->and_where('p.center', '=', 0)
						->execute($this->client['database'])
						->as_array();
					$large_promos = DB::select('pi.name', 'pi.media', 'ppi.sort')
						->from(array('promos_items', 'pi'))
						->join(array('promos_promos_items', 'ppi'))
						->on('pi.id', '=', 'ppi.promos_items_id')
						->join(array('promos', 'p'))
						->on('p.id', '=', 'ppi.promos_id')
						->join(array('zones_content', 'zc'))
						->on('zc.content_id', '=', 'p.id')
						->join(array('events_items', 'ei'))
						->on('ei.item_id', '=', 'pi.id')
						->join(array('events', 'e'))
						->on('ei.event_id', '=', 'e.id')
						->where('e.active', '=', 1)
						->and_where('ei.type', '=', 'promo')
						->where('zc.type', '=', 'promo')
						->and_where('zc.zone_id', '=', $zone['id'])
						->and_where('p.center', '=', 1)
						->execute($this->client['database'])
						->as_array();
					$zone['menus'] = $menus;
					$zone['promos'] = $promos;
					$zone['large_promos'] = $large_promos;
				}

				$output = json_encode($info);
				$this->template->content = $output;
			}
			else
			{
				$output = json_encode(FALSE);
				$this->template->content = $output;
			}
		}
	}


          public function action_add_stands()
	{
		$success = true;
		$stands_themes = Arr::get($_REQUEST, 'stands_themes', NULL);
		foreach ($stands_themes as $stand_theme)
		{
			
			
				$exists = DB::select('stand_id')
					->from('stands_themes')
					->where('stand_id', '=', $stand_theme['stand_id'])
					->execute($this->client['database'])
					->as_array();
				if($exists)
				{
					if(!$stand_theme['theme_id'])
					{
						$result = DB::delete('stands_themes')
							->where('stand_id', '=', $stand_theme['stand_id'])
							->execute($this->client['database']);
					}
					else
					{
					$create_rel = DB::update('stands_themes')
						->set(array('theme_id' => $stand_theme['theme_id']))
						->where('stand_id', '=', $stand_theme['stand_id'])
						->execute($this->client['database']);
					}
				}
				else
				{
					if($stand_theme['theme_id'])
					{
					$create_rel = DB::insert('stands_themes', array('stand_id', 'theme_id'))
						->values(array($stand_theme['stand_id'], $stand_theme['theme_id']))
						->execute($this->client['database']);
					}
				}
			
		}
		$output = json_encode($success);
		$this->template->content = $output;
	}

	public function action_add_default_stands()
	{
		$success = true;
		$subthemes = DB::select('id', 'name')
			->from('themes')
			->where('parent_theme_id', '!=', NULL)
			->execute($this->client['database'])
			->as_array();
		
		foreach($subthemes as $index => $subtheme_info)
		{
			$name = 'default' . $subtheme_info['name'];
			$results = DB::insert('stands', array('name', 'default_stand'))
				->values(array($name, 1))
				->execute($this->client['database']);
			$id = $results[0];
			$create_rel = DB::insert('stands_themes', array('stand_id', 'theme_id'))
				->values(array($id, $subtheme_info['id']))
				->execute($this->client['database']);
			if(!$create_rel)
			{
				$success = false;
			}
		}
		$output = json_encode($success);
		$this->template->content = $output;
	}
	
	public function action_add()
	{
		$success = true;
		$parent_theme_id = Arr::get($_REQUEST, 'theme_id', NULL);
		$subtheme_name = Arr::get($_REQUEST, 'subtheme_name', NULL);
		
		
			$insert_result = DB::insert('themes', array('name', 'parent_theme_id'))
				->values(array($subtheme_name, $parent_theme_id))
				->execute($this->client['database']);
			if(!$insert_result)
			{
				$success = false;
			}
			$theme_id = $insert_result[0];
			$stand_name = 'default' . $subtheme_name;
			$insert_result = DB::insert('stands', array('name', 'default_stand'))
				->values(array($stand_name, 1))
				->execute($this->client['database']);
			if(!$insert_result)
			{
				$success = false;
			}
			$stand_id = $insert_result[0];
			$insert_rel_result = DB::insert('stands_themes', array('stand_id', 'theme_id'))
				->values(array($stand_id, $theme_id))
				->execute($this->client['database']);
			if(!$insert_rel_result)
			{
				$success = false;
			}
		
		$output = json_encode($success);
		$this->template->content = $output;
	}
	
	private function _is_subtheme($theme_id)
	{
		$results = DB::select('*')
			->from('themes')
			->where('id', '=', $theme_id)
			->execute($this->client['database'])
			->as_array();
		if (is_numeric($results[0]['parent_theme_id']) && !empty($results[0]['parent_theme_id']))
		{
			return true;
		}
		return false;
	}

}