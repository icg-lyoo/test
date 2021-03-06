<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Promos extends Controller_Templates_APIv1
{
	public function action_get_theme_by_event()
	{

		$event_id = Arr::get($_REQUEST, 'event_id');


        if($event_id == 'all')
		{
			$results = DB::select('et.theme_id', 't.name')
				->from(array('events_themes', 'et'))
				->join(array('themes', 't'))
				->on('et.theme_id', '=', 't.id')
				->execute($this->client['database'])
				->as_array();
		}
		else
		{
			$results = DB::select('et.theme_id', 't.name')
				->from(array('events_themes', 'et'))
				->join(array('themes', 't'))
				->on('et.theme_id', '=', 't.id')
				->where('et.event_id', '=', $event_id)
				->execute($this->client['database'])
				->as_array();
		}

		$output = json_encode($results);
		$this->template->content = $output;
	}

	public function action_get_available_promos_by_event_and_theme()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');
		$theme_id = Arr::get($_REQUEST, 'theme_id');
		$large = Arr::get($_REQUEST, 'large', 0);

        
        
        if($event_id=='all')
        {
            $results = DB::select('pi.id', 'pi.name', 'pi.media')
               ->distinct(true)
			->from(array('promos_items', 'pi'))
			->join(array('themes_promos_items', 'tpi'))
			->on('pi.id', '=', 'promos_items_id')
//               ->join(array('events_items', 'ei'))
//                    ->on('ei.item_id', '=', 'pi.id')
//               ->where('ei.type', '=', 'promo')
               ->and_where('tpi.theme_id', '=', $theme_id)
               ->and_where('pi.large', '=', $large)  
               ->execute($this->client['database'])
               ->as_array();
            
        }
        else
        {
            $results = DB::select('pi.id', 'pi.name', 'pi.media')
               ->from(array('promos_items', 'pi'))
               ->join(array('themes_promos_items', 'tpi'))
                    ->on('pi.id', '=', 'promos_items_id')
               ->join(array('events_items', 'ei'))
                    ->on('ei.item_id', '=', 'pi.id')
               ->where('ei.type', '=', 'promo')
			->and_where('ei.event_id', '=', $event_id)
			->and_where('tpi.theme_id', '=', $theme_id)
			->and_where('pi.large', '=', $large)
			->execute($this->client['database'])
			->as_array();
        }


		$output = json_encode($results);

		$this->template->content = $output;
        
        
	}
	
	public function action_get_promos_by_event_and_theme()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');
		$theme_id = Arr::get($_REQUEST, 'theme_id');
		$large = Arr::get($_REQUEST, 'large', 0);

        if($event_id=='all')
        {
            $results = DB::select('pi.id', 'pi.name', 'pi.media')
               ->distinct(true)
			->from(array('promos_items', 'pi'))
			->join(array('themes_promos_items', 'tpi'))
			->on('pi.id', '=', 'promos_items_id')
//               ->join(array('events_items', 'ei'))
//                    ->on('ei.item_id', '=', 'pi.id')
//               ->where('ei.type', '=', 'promo')
               ->and_where('tpi.theme_id', '=', $theme_id)
               ->and_where('pi.large', '=', $large)  
               ->execute($this->client['database'])
               ->as_array();
            
        }
        else
        {
            $results = DB::select('pi.id', 'pi.name', 'pi.media')
               ->from(array('promos_items', 'pi'))
               ->join(array('themes_promos_items', 'tpi'))
                    ->on('pi.id', '=', 'promos_items_id')
               ->join(array('events_items', 'ei'))
                    ->on('ei.item_id', '=', 'pi.id')
               ->where('ei.type', '=', 'promo')
			->and_where('ei.event_id', '=', $event_id)
			->and_where('tpi.theme_id', '=', $theme_id)
			->and_where('pi.large', '=', $large)
			->execute($this->client['database'])
			->as_array();
        }


		$output = json_encode($results);

		$this->template->content = $output;
        
        
	}

	public function action_get_promo_details()
	{
		$promo_id = Arr::get($_REQUEST, 'promo_id');


		$results = DB::select('pi.id', 'pi.name', 'pi.description', 'pi.media')
			->from(array('promos_items', 'pi'))
			->where('pi.id', '=', $promo_id)
			->execute($this->client['database'])
			->as_array();

		$output = json_encode($results);

		$this->template->content = $output;
        
	}

    public function action_add_new_promoitem()
    {
        $msg = array();
        
        $event_id = Arr::get($_REQUEST, 'event_id');
        $theme_id = Arr::get($_REQUEST, 'theme_id');
        $promo_desc = Arr::get($_REQUEST, 'promo_desc');
        $promo_title = Arr::get($_REQUEST, 'promo_title');
        $media = Arr::get($_REQUEST, 'uploaded_media_filename');
        $large = Arr::get($_REQUEST, 'large', 0);
        
        try{
            //add new promo items in promos_items with title,media,description
            $query = DB::insert('promos_items', array('name', 'media', 'description', 'large'))
                        ->values(array($promo_title, $media, $promo_desc, $large))
                        ->execute($this->client['database']);


            //add relationship in events and themes
            if($query)
            {
                try
                {
                    if($event_id == 'all')
                    {
                        $query_ei = true;
                        $query_tpi = false;
                        
                        //query all events
                        $all_events = $this->get_all_events();
      
                        
                        $at_least_one_event = false;
                        //loop thru each event and add relationship between events
                        foreach ($all_events as $event)
                        {
                            //for this event, check if the theme exists if it doesn't you don't need to write

                            
                            $theme_check = $this->is_theme_in_event($theme_id, $event['id']);
                            
                            //check if the current event has the specific theme associated with it
                            if($theme_check)
                            {
                                $query_temp = DB::insert('events_items', array('event_id', 'item_id', 'type'))
                                    ->values(array($event['id'], $query[0], 'promo'))
                                    ->execute($this->client['database']);
                                if(!$query_temp)
                                {
                                    $query_ei = false;
                                    break;
}
                                
                                $at_least_one_event = true;
                                
                            }
                            
                        }
                        
                        //if theres at least one event, then write the theme - promo_items relationship, if not cant add
                        
                        if($at_least_one_event)
                        {
                            $query_tpi = DB::insert('themes_promos_items', array('theme_id', 'promos_items_id'))
                                ->values(array($theme_id, $query[0]))
                                ->execute($this->client['database']);
                        }
                        
                    }
                    else
                    {
                        $query_ei = DB::insert('events_items', array('event_id', 'item_id', 'type'))
                                ->values(array($event_id, $query[0], 'promo'))
                                ->execute($this->client['database']);
                        
                        $query_tpi = DB::insert('themes_promos_items', array('theme_id', 'promos_items_id'))
                            ->values(array($theme_id, $query[0]))
                            ->execute($this->client['database']);
                    }
                    
                    
                    
                }
                catch (Exception $e)
                {
                    echo 'insert into events_items has failed'; 
                    
                }
                

            }
        }
        catch (Exception $e)
        {
            echo 'insert into promos_items has failed'; 
            
        }
        
        
        
        if($query_ei && $query_tpi)
        {
            $msg = array('meta'=>array('status'=>1, 'message'=>'DB write successful')); 
        }
        else
        {
            $msg = array('meta'=>array('status'=>0, 'message'=>'DB write Error')); 
            
        }
        
        
        $output = json_encode($msg);
        
        $this->template->content = $output;
        
    }
    
    //user passes in the event_id, theme_id, and promo_id and the function deletes the promos_items. It will delete all entries
    //in themes_promos_items table, events_items table, promos_items and promos_promos_items
    public function action_delete_promoitem()
    {
        $success_flag = false;
        $event_id = Arr::get($_REQUEST, 'event_id');
        $promo_id = Arr::get($_REQUEST, 'promo_id');
        $theme_id = Arr::get($_REQUEST, 'theme_id');
        
        //delete the first 3 dependencies first
        
        //1. delete promo_id from themes_promos_items
        
        //2. delete promo_id from events_items
        
        //3. delete promo_id from promos_promos_items
        
        //all deletes every relationship.
        if($event_id == 'all')
        {
            //delete the first 3 dependencies first
        
            //1. delete promo_id from themes_promos_items
            $query_tpi = DB::delete('themes_promos_items')
                    ->where('theme_id', '=', $theme_id)
                    ->and_where('promos_items_id', '=', $promo_id)
                    ->execute($this->client['database']);
            //2. delete promo_id from events_items
        
            $query_ei = DB::delete('events_items')
//                    ->where('event_id', '=', $event_id)
                    ->where('item_id', '=', $promo_id)
                    ->and_where('type', '=', 'promo')
                    ->execute($this->client['database']);
        
            //3. delete promo_id from promos_promos_items
            $query_ppi = DB::delete('promos_promos_items')
                    ->where('promos_items_id', '=', $promo_id)
                    ->execute($this->client['database']);
        
            
        //finally, delete the actual promos_items entry from promos_items
            $query_pi = DB::delete('promos_items')
                    ->where('id', '=', $promo_id)
                    ->execute($this->client['database']);
        
            $success_flag = true;
        
        }
        //theme, event specific delete just gets rid of the event relationship
        //this keeps the original promos_items entry in the library
        else
        {
        

            $query_ei = DB::delete('events_items')
                    ->where('event_id', '=', $event_id)
                    ->where('item_id', '=', $promo_id)
                    ->and_where('type', '=', 'promo')
                    ->execute($this->client['database']);

            
            $success_flag = true;
            
        }
        
        
        
        
        if($query_pi)
        {
            $msg = 'promo item and all its dependencies have been deleted';
        }
        else
        {
            $msg = 'promo delete has failed';
        }
        
        $output = json_encode($msg);
        
        $this->template->content = $output;
        
        
    }
    
    public function action_edit_promoitem()
    {
        $msg = '';
    
        $promo_id = Arr::get($_REQUEST, 'promo_item_id');
        $promo_name = Arr::get($_REQUEST, 'promo_name');
        $promo_desc = Arr::get($_REQUEST, 'promo_desc');
        
        
        $query = DB::update('promos_items')
                ->set(array('name'=>$promo_name, 'description'=>$promo_desc))
                ->where('id', '=', $promo_id)
                ->execute($this->client['database']);
        
        if($query)
        {
            $msg = array('meta'=>array('status'=>1, 'message'=>'Edit was successful')); 
            
        }
        else
        {
            $msg = array('meta'=>array('status'=>0, 'message'=>'Edit has failed')); 
            
        }
        
        $output = json_encode($msg);
        
        $this->template->content = $output;
        
    }
    
    
    private function get_all_events()
	{
		$results = DB::select('id')
			->from('events')
			->execute($this->client['database'])
			->as_array();
		
		return $results;
	}
    
    private function is_theme_in_event($theme_id, $event_id)
    {
        $query = DB::select('theme_id')
                ->from(array('events_themes', 'et'))
                ->where('et.event_id', '=', $event_id)
                ->and_where('et.theme_id', '=', $theme_id)
                ->execute($this->client['database'])
                ->as_array();
        
        if($query)
        {
            return true;
            
        }
        else
        {
            return false;
            
        }
        
    }
	
	public function action_get_promos_from_zone()
	{
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		
		$promo_items = DB::select('pi.id', 'pi.name', 'pi.media')
			->from(array('promos_items', 'pi'))
			->join(array('promos_promos_items', 'ppi'))
			->on('ppi.promos_items_id', '=', 'pi.id')
			->join(array('promos', 'p'))
			->on('ppi.promos_id', '=', 'p.id')
			->join(array('zones_content', 'zc'))
			->on('zc.content_id', '=', 'p.id')
			->where('zc.type', '!=', 'menu')
			->and_where('zc.zone_id', '=', $zone_id)
			->execute($this->client['database'])
			->as_array();
		
		 $output = json_encode($promo_items);
        
		 $this->template->content = $output;
	}
    
    public function action_add_promo_to_zone()
	{
		$success = true;
		$promos = Arr::get($_REQUEST, 'items');
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		
		$promoid = DB::select('p.id')
				->from(array('promos', 'p'))
				->join(array('zones_content', 'zc'))
				->on('zc.content_id', '=', 'p.id')
				->where('zc.zone_id', '=', $zone_id)
				->and_where('zc.type', '!=', 'menu')
				->execute($this->client['database'])
				->as_array();
		
		$sort = 1;
		foreach($promos as $promo)
		{
			$pi_id = DB::select('id')
				->from('promos_items')
				->where('media', '=', $promo)
				->execute($this->client['database'])
				->as_array();
			$pi_id = $pi_id[0]['id'];
			$insert_rel = DB::insert('promos_promos_items', array('promos_id', 'promos_items_id', 'sort'))
				->values(array($promoid, $pi_id, $sort))
				->execute($this->client['database']);
			if(!$insert_rel)
			{
				$success = false;
			}
			$sort++;
		}
		
		 $output = json_encode($success);
        
		 $this->template->content = $output;
        
		
	}
	
	public function action_remove_promo_from_zone(){
		$success = true;
		$promos = Arr::get($_REQUEST, 'items');
		$zone_id = Arr::get($_REQUEST, 'zone_id');
		
		$promoid = DB::select('p.id')
				->from(array('promos', 'p'))
				->join(array('zones_content', 'zc'))
				->on('zc.content_id', '=', 'p.id')
				->where('zc.zone_id', '=', $zone_id)
				->and_where('zc.type', '!=', 'menu')
				->execute($this->client['database'])
				->as_array();
		
		foreach($promos as $promo)
		{
			$pi_id = DB::select('id')
				->from('promos_items')
				->where('media', '=', $promo)
				->execute($this->client['database'])
				->as_array();
			$pi_id = $pi_id[0]['id'];
			$remove_rel = DB::delete('promos_promos_items')
				->where('promos_id', '=',$promoid)
				->and_where('promos_items_id', '=', $pi_id)
				->execute($this->client['database']);
			if(!$remove_rel)
			{
				$success = false;
			}
		}
		
		 $output = json_encode($success);
        
		 $this->template->content = $output;
	}
    
    
    
}