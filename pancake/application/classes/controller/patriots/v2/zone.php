<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Zone extends Controller_Templates_APIv1
{

	public function action_get()
	{
		$id = Arr::get($_REQUEST, 'id', '');

		$results = DB::select('*')
			->from('zones');
		if (!empty($id))
		{
			$results->where('id', '=', $id);
		}

		$results->execute($this->client['database'])
			->as_array();

		$output = json_encode($results[0]);
		$this->template->content = $output;
	}

	public function action_change_sort()
	{
		$zones = json_decode(Arr::get($_REQUEST, 'zones'));
		$i = 1;
		foreach($zones as $zone)
		{
			$result = DB::update('stands_zones')
				->set(array('sort' => $i))
				->where('zone_id', '=', $zone)
				->execute($this->client['database']);
			$i++;
		}

		$output = json_encode(true);
		$this->template->content = $output;
	}

	public function action_add()
	{
		$zone_type = Arr::get($_REQUEST, 'type');
		$subtheme_id = Arr::get($_REQUEST, 'subtheme');
		$zone_sort = Arr::get($_REQUEST, 'sort');
		$css_class = Arr::get($_REQUEST, 'css_class');
		$this->client['database']->begin();
		$description = $css_class . ' ' . $zone_type;
		$success = true;
		if ($zone_type == 'menus')
			$type = 'menu';
		elseif ($zone_type == 'promo')
			$type = 'promo';
		elseif ($zone_type == 'large-promo')
			$type = 'large_promo';
		$zone_id = DB::insert('zones', array('description', 'type'))
			->values(array($description, $type))
			->execute($this->client['database']);
		if (count($zone_id) > 0)
		{
			$stands = DB::select('stand_id')
				->from('stands_themes')
				->where('theme_id', '=', $subtheme_id)
				->execute($this->client['database'])
				->as_array();
			foreach ($stands as $stand)
			{
				$insert_rel_result = DB::insert('stands_zones', array('stand_id', 'zone_id', 'sort'))
					->values(array($stand['stand_id'], $zone_id[0], $zone_sort))
					->execute($this->client['database']);
				if (!$zone_id)
				{
					$this->client['database']->rollback();
					$success = false;
				}
			}

			if ($zone_type != 'menus')
			{
				$center = 0;
				if ($zone_type == 'large-promo')
				{
					$center = 1;
				}
				$insert_promo = DB::insert('promos', array('title', 'center'))
					->values(array($description, $center))
					->execute($this->client['database']);
				if (!$insert_promo)
				{
					$this->client['database']->rollback();
					$success = false;
				}
				$insert_promo_rel = DB::insert('zones_content', array('zone_id', 'content_id'))
					->values(array($insert_results[0], $insert_promo[0]))
					->execute($this->client['database']);
				if (!$insert_promo_rel)
				{
					$this->client['database']->rollback();
					$success = false;
				}
			}

			$this->client['database']->commit();
		}
		else
		{
			$this->client['database']->rollback();
		}
		$output = ($success) ? json_encode($zone_id[0]) : json_encode(false);
		$this->template->content = $output;
	}

	public function action_remove()
	{
		$success = true;
		$zone_id = Arr::get($_REQUEST, 'id');
		$this->client['database']->begin();
		$zone_delete = DB::delete('zones')
			->where('id', '=', $zone_id)
			->execute($this->client['database']);
		if (!$zone_delete)
		{
			$success = false;
		}
		else
		{
			$stands_zones_delete = DB::delete('stands_zones')
				->where('zone_id', '=', $zone_id)
				->execute($this->client['database']);
			if (!$stands_zones_delete)
			{
				$success = false;
				$this->client['database']->rollback();
			}
			else
			{
				$zones_content_delete = DB::delete('zones_content')
					->where('zone_id', '=', $zone_id)
					->execute($this->client['database']);
				
				$this->client['database']->commit();
			}
		}

		$output = json_encode($success);
		$this->template->content = $output;
	}
	
		
	public function action_add_menu()
	{
		$success = true;
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		$title = Arr::get($_REQUEST, 'title');
		$this->client['database']->begin();
		//Adds Menu
		$insert_menu = DB::insert('menus', array('title'))
			->values(array($title))
			->execute($this->client['database']);
		if($insert_menu)
		{
			$menu_id = $insert_menu[0];
			
			$create_rel = DB::insert('zones_content', array('zone_id', 'content_id', 'type'))
				->values(array($zone_id, $menu_id, 'menu'))
				->execute($this->client['database']);
			if($create_rel)
			{
				$this->client['database']->commit();
			}
			else
			{
				$success = false;
				$this->client['database']->rollback();
			}
		}
		else
		{
			$success = false;
		}

		$output = json_encode($insert_menu[0]);
		$this->template->content = $output;
	}
	
	public function action_remove_menu()
	{
		$success = true;
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		$menu_id = Arr::get($_REQUEST, 'menu_id');
		 
		$remove_rel = DB::delete('zones_content')
			->where('content_id', '=', $menu_id)
			->and_where('type', '=', 'menu')
			->and_where('zone_id', '=', $zone_id)
			->execute($this->client['database']);
		if(!$remove_rel)
		{
			echo '<pre>';
			print_r($menu_id);
			echo '</pre>';
			die();
		}
		$remove_menu = DB::delete('menus')
			->where('id', '=', $menu_id)
			->execute($this->client['database']);
		
		$output = json_encode($success);
		$this->template->content = $output;
	}

}

