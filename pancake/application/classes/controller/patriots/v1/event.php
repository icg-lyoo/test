<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Event extends Controller_Templates_APIv1
{
	
	public function action_get()
	{
		$id = Arr::get($_REQUEST, 'id', '');
		$name = Arr::get($_REQUEST, 'name', '');

		$results = DB::select('*')
			->from('events');
		if (!empty($id))
		{
			$results->where('id', '=', $id);
		}
		elseif (!empty($name))
		{
			$results->where('name', '=', $name);
		}

		$results->execute($this->client['database'])
			->as_array();

		$output = json_encode($results[0]);
		$this->template->content = $output;
	}

	public function action_get_all()
	{
		$results = DB::select('id', 'name')
			->from('events')
			->execute($this->client['database'])
			->as_array();

		$output = json_encode($results);
		$this->template->content = $output;
	}

	public function action_get_active()
	{
		$results = DB::select('id', 'name')
			->from('events')
			->where('active', '=', TRUE)
			->execute($this->client['database'])
			->as_array();
		$output = json_encode($results[0]);
		$this->template->content = $output;
	}

	public function action_get_all_active_menu_items()
	{
		$titles_only = Arr::get($_REQUEST, 'titles_only', false);
		
		$all_menu_items = DB::select('mi.title', 'mip.price', 'mi.description', 'mi.id')
			->from(array('menus_items', 'mi'))
			->join(array('menus_items_prices', 'mip'))
			->on('mi.id', '=', 'mip.menus_items_id')
			->where('mi.enabled', '=', 1)
			->order_by('mi.title', 'ASC')
			->execute($this->client['database'])
			->as_array();
		$output = json_encode($all_menu_items);
		$this->template->content = $output;
	}
	
	public function action_get_menu_items()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');
		$titles_only = Arr::get($_REQUEST, 'titles_only', false);
		if ($event_id == 'all')
		{
			$results = DB::select('mi.title', 'mi.description', 'mi.description_extra', 'mip.price', array('mip.id', 'mipid'), 'mi.id', 'mi.enabled')
				->from(array('menus_items', 'mi'))
				->join(array('menus_items_prices', 'mip'))
				->on('mi.id', '=', 'mip.menus_items_id')
				//->join(array('events_items', 'ei'), 'LEFT OUTER')
				//->on('ei.item_id', '=', 'mip.id')
//				->group_by('mip.id')
				//->where('ei.event_id', 'IS', NULL)
				->order_by('mi.title', 'ASC')
				->execute($this->client['database'])
				->as_array();

			foreach($results as &$result)
			{
				$subtitles = DB::select('subtitle')
					->from('subtitle')
					->where('menu_item_id', '=', $result['id'])
					->execute($this->client['database'])
					->as_array();
				$result['subtitle'] = array();
				foreach($subtitles as $subtitle)
				{
						$result['subtitle'][] = $subtitle['subtitle'];
				}
			}
			$output = json_encode($results);
			$this->template->content = $output;
		}
		else
		{
			if ($titles_only)
			{
				$results = DB::select('mi.title')
					->distinct(TRUE)
					->from(array('events_items', 'ei'))
					->join(array('menus_items_prices', 'mip'))
					->on('ei.item_id', '=', 'mip.id')
					->join(array('menus_items', 'mi'))
					->on('mip.menus_items_id', '=', 'mi.id')
					->where('ei.event_id', '=', $event_id)
					->where('ei.type', '=', 'menu_item')
					->execute($this->client['database'])
					->as_array();
			}
			else
			{
				$results = DB::select('mi.title', 'mip.price', 'mip.menus_items_id', 'mip.id')
					->distinct(TRUE)
					->from(array('events_items', 'ei'))
					->join(array('menus_items_prices', 'mip'))
					->on('ei.item_id', '=', 'mip.id')
					->join(array('menus_items', 'mi'))
					->on('mip.menus_items_id', '=', 'mi.id')
					->where('ei.event_id', '=', $event_id)
					->where('ei.type', '=', 'menu_item')
					->execute($this->client['database'])
					->as_array();
			}
		}
		$output = json_encode($results);
		$this->template->content = $output;
	}

	public function action_get_promo_items()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');
		$results = DB::select('p.center', 'p.title', 'pi.name', 'pi.media')
			->from(array('events_items', 'ei'))
			->join(array('promos_items', 'pi'))
			->on('ei.item_id', '=', 'pi.id')
			->join(array('promos', 'p'))
			->on('pi.id', '=', 'pi.id')
			->where('ei.event_id', '=', $event_id)
			->where('ei.type', '=', 'promo')
			->execute($this->client['database'])
			->as_array();

		$output = json_encode($results);
		$this->template->content = $output;
	}

	public function action_set_active()
	{
		$event_id = Arr::get($_REQUEST, 'event_id', 1);
		$results = DB::update('events')
			->set(array('active' => FALSE))
			->where('active', '=', TRUE)
			->execute($this->client['database']);
		$results = DB::update('events')
			->set(array('active' => TRUE))
			->where('id', '=', $event_id)
			->execute($this->client['database']);
		if (count($results) == 1)
		{
			$output = TRUE;
			$this->template->content = json_encode($output);
		}
		else
		{
			$output = FALSE;
			$this->template->content = json_encode($output);
		}
	}

	public function action_set_menus_items()
	{
                $items = json_decode($_REQUEST['data'], TRUE);
                
		$output = 1;
		$msg = '';
		$event_id = Arr::get($items, 'event_id');

		//subtract the event_id key from the total number of change items
		$count = count($items) - 1;

		//The post data has to have event_id + data. At least 3. Count cannot be just 1.
		if (count($items) > 1)
		{
			//for all event changes. Overrides all price and resaves the price for everything
			//it needs to loop thru each mi ids and find them in the menu items price.
			//needs to change it for every entry in the mip table
			if ($event_id == 'all')
			{
				foreach ($items as $key => $data)
				{
					//disregard the event_id key
					if ($key == 'event_id' || $key == 'consumer_key')
					{
						continue;
					}
					else
					{
						$exploded_key = explode('_', $key);
                                                
						if(isset($exploded_key[1]))
						{
							if ($exploded_key[1] == 'title')
							{
								//title update function
								//pass in the menu_items ID
								$flag = $this->set_menus_items_title($exploded_key[2], $data);
							}
							elseif ($exploded_key[1] == 'price')
							{
								//price update function
								//pass in the menu_items_prices ID
								//true flag indicates this is a global price change
								$flag = $this->set_menus_items_price($exploded_key[2], $data, true);
							}
							elseif($exploded_key[1] == 'enabled')
							{
								$flag = $this->set_menus_items_enabled($exploded_key[0], $data);
								//error i guess
							}
                            elseif ($exploded_key[1] == 'description')
                            {
                                   $flag = $this->set_menus_items_description($exploded_key[2], $data);
                            }
                            elseif ($exploded_key[1] == 'descriptionextra')
                            {
                                    $flag = $this->set_menus_items_description_extra($exploded_key[2], $data);
                            }
							else
							{
								$msg .= $key;
							}
						}
					}
				}

				$msg = 'Changes have been made succesfully';
			}
			//for event specific change
			else
			{
				//filter results
				$i = 1;
				foreach ($items as $key => $data)
				{
					//disregard the event_id key
					if ($key == 'event_id' || $key == 'consumer_key')
					{
						continue;
					}
					else
					{
						$exploded_key = explode('_', $key);

						if(isset($exploded_key[1]))
						{
							if ($exploded_key[1] == 'title')
							{
								//title update function
								//pass in the menu_items ID
								$flag = $this->set_menus_items_title($exploded_key[2], $data);
							}
							elseif ($exploded_key[1] == 'price')
							{
								//price update function
								//pass in the menu_items_prices ID
								$flag = $this->set_menus_items_price($exploded_key[2], $data);
							}
                            elseif ($exploded[1] == 'description')
                            {
                                   $flag = $this->set_menus_items_description($exploded_key[2], $data);
                            }
                            elseif ($exploded[1] == 'descriptionextra')
                            {
                                   $flag = $this->set_menus_items_description_extra($exploded_key[2], $data);
                            }
							else
							{
								//error i guess
						}
						}
					}
				}
				$output = 1;
				$msg .= 'Changes have been made succesfully';
			}
		}
		else
		{
			$output = 0;
			$msg .= 'No data was sent. No updates have been made';
		}



		$this->template->content = json_encode(array('meta' => array('status' => $output, 'message' => $msg)));
	}
	
	private function set_menus_items_enabled($menu_item_id, $value)
	{
		$query = DB::update('menus_items')
			->set(array('enabled' => $value))
			->where('id', '=', $menu_item_id)
			->execute($this->client['database']);

		$return_flag = false;

		if ($query)
		{
			$return_flag = true;
		}
		else
		{
			$return_flag = false;
		}

		return $return_flag;
	}

        private function set_menus_items_description($menu_item_id, $value) 
        {
            $query = DB::update('menus_items')
                    ->set(array('description' => $value))
                    ->where('id', '=', $menu_item_id)
                    ->execute($this->client['database']);
            
            $return_flag = false;
            
            if($query) 
            {
                $return_flag = true;
            }
            else
            {
                $return_flag = false;
            }
            
            return $return_flag;
        }
        
        private function set_menus_items_description_extra($menu_item_id, $value)
        {
            $query = DB::update('menus_items')
                    ->set(array('description_extra' => $value))
                    ->where('id', '=', $menu_item_id)
                    ->execute($this->client['database']);
            
            $return_flag = false;

            if ($query)
            {
                    $return_flag = true;
            }
            else
            {
                    $return_flag = false;
            }

            return $return_flag;
        }
       
        
	private function set_menus_items_title($menu_item_id, $value)
	{
		$query = DB::update('menus_items')
			->set(array('title' => $value))
			->where('id', '=', $menu_item_id)
			->execute($this->client['database']);

		$return_flag = false;

		if ($query)
		{
			$return_flag = true;
		}
		else
		{
			$return_flag = false;
		}

		return $return_flag;
	}

	//global variable indicates if this is global price change vs. event specific
	private function set_menus_items_price($menu_item_prices_id, $value, $global = false)
	{

		if ($global)
		{
			$query = DB::update('menus_items_prices')
				->set(array('price' => $value))
				->where('menus_items_id', '=', $menu_item_prices_id)
				->execute($this->client['database']);
		}
		else
		{
			$query = DB::update('menus_items_prices')
				->set(array('price' => $value))
				->where('id', '=', $menu_item_prices_id)
				->execute($this->client['database']);
		}

		$return_flag = false;

		if ($query)
		{
			$return_flag = true;
		}
		else
		{
			$return_flag = false;
		}

		return $return_flag;
	}

	public function action_add_new_menuitem()
	{
		$output = 1;
		$msg = '';
		$new_menu_item_title = Arr::get($_REQUEST, 'new_menuitem_title', '');
		$new_menu_item_price = Arr::get($_REQUEST, 'new_menu_item_price', '');
                $new_menu_item_description = Arr::get($_REQUEST, 'new_menu_item_description', '');

		$query_mip = false;


		if ($new_menu_item_title)
		{
			//title cannot be empty
			$output = 0;
			$msg = 'Title field cannot be blank';

			try
			{

				$query = DB::insert('menus_items', array('title', 'description'))
					->values(array($new_menu_item_title, $new_menu_item_description))
					->execute($this->client['database']);

				if ($query)
				{
					//default price
					$query_mip = DB::insert('menus_items_prices', array('menus_items_id', 'price'))
						->values(array($query[0], $new_menu_item_price))
						->execute($this->client['database']);
				}
			}
			catch (Exception $e)
			{

				$output = 0;
				$msg .= 'Error Executing SQL commands.';
			}


			if ($query && $query_mip)
			{
				$output = 1;
				$msg .= 'New Menu Item has been Created Successfully';
			}
			else
			{
				$output = 0;
				$msg .= 'Menu could not be created. Error';
			}
		}


		$this->template->content = json_encode(array('meta' => array('status' => $output, 'message' => $msg)));
	}

	public function action_add_menuitem_to_event()
	{
		$menu_event_set = '';
		$output = 1;
		$msg = '';
		$event_id = Arr::get($_REQUEST, 'event_id');

		//menu_items_prices needs to be created first col item_id
		//look for already existing menu-item to event
		foreach ($_REQUEST as $key => $data)
		{
			//disregard the event_id key
			if ($key == 'event_id' || $key == 'consumer_key')
			{
				continue;
			}
			else
			{
				$exploded_key = explode('_', $key);
				$menu_event_relationship = $this->get_menuitem_by_event($exploded_key[1], $event_id);

				//if exists, then the event menu item relationship already is there. This means they have already added this item to the specific event.
				// Don't need to do anything
				if ($menu_event_relationship)
				{
					
				}
				//menu item and event, there is not relationship, create a new one with price set to default.
				else
				{

					$menu_event_set = $this->set_menuitem_to_event($exploded_key[1], $event_id);
				}
			}
		}
		//if exists, skip
		//if doesn't create
		//then event_items need to be created related the above with an event_id


		$this->template->content = $menu_event_set;
	}

	//parameters is the menu item id with the id
	//function checks if a menu_items_prices exist between the two
	private function get_menuitem_by_event($menu_item_id, $event_id)
	{
		$results = DB::select('mip.id')
			->from(array('events_items', 'ei'))
			->join(array('menus_items_prices', 'mip'))
			->on('ei.item_id', '=', 'mip.id')
			->where('ei.event_id', '=', $event_id)
			->where('ei.type', '=', 'menu_item')
			->where('mip.menus_items_id', '=', $menu_item_id)
			->execute($this->client['database'])
			->as_array();

		return $results;
	}

	//parameters is the menu item id with the event id
	//function writes a new relationship between event_items and menu_items_price.
	//Each table needs an entry with menu_items_prices being created first
	private function set_menuitem_to_event($menu_item_id, $event_id)
	{
		$output = 0;
		$msg = '';

		$query_ei = array();
		//create entry for menu_items_prices

		$default_menuitem = $this->get_menuitem_default($menu_item_id);
		$default_price = $default_menuitem['price'];

		//default price is the price of MIP where no relationship with event
		$query_mip = DB::insert('menus_items_prices', array('menus_items_id', 'price'))
			->values(array($menu_item_id, $default_price))
			->execute($this->client['database']);



		if ($query_mip)
		{

			try
			{
				$query_ei = DB::insert('events_items', array('event_id', 'item_id', 'type'))
					->values(array($event_id, $query_mip[0], 'menu_item'))
					->execute($this->client['database']);
			}
			catch (Exception $e)
			{

				echo 'insert into events_items has failed';
			}
		}


		//if previous write is successful, create events_items relationship

		if ($query_ei)
		{
			return array('meta' => array('status' => 1, 'message' => 'DB write successful'));
		}
		else
		{
			return array('meta' => array('status' => 0, 'message' => 'DB write Error'));
		}
	}

	private function get_menuitem_default($menu_item_id)
	{
		$results = DB::select('mi.title', 'mip.price', array('mip.id', 'mipid'), 'mi.id', 'ei.event_id')
			->from(array('menus_items', 'mi'))
			->join(array('menus_items_prices', 'mip'), 'LEFT OUTER')
			->on('mi.id', '=', 'mip.menus_items_id')
			->join(array('events_items', 'ei'), 'LEFT OUTER')
			->on('ei.item_id', '=', 'mip.id')
			->group_by('mip.id')
			->where('mip.menus_items_id', '=', $menu_item_id)
			->execute($this->client['database'])
			->as_array();


		foreach ($results as $key => $result)
		{
			//this is default
			if (empty($result['event_id']))
			{
				return $results[$key];
			}
		}
	}

	public function action_add_promo_item()
	{
		
	}

}