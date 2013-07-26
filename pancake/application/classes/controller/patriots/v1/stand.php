<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Stand extends Controller_Templates_APIv1
{
	public function action_get()
	{
		$id = Arr::get($_REQUEST, 'id', '');
		$number = Arr::get($_REQUEST, 'number', '');
		$name = Arr::get($_REQUEST, 'name', '');
		
		$results = DB::select('*')
			->from('events');
		if(!empty($id))
		{
			$results->where('id', '=', $id);
		}
		elseif(!empty($number))
		{
			$results->where('number', '=', $number);
		}
		elseif(!empty($name))
		{
			$results->where('name', '=', $name);
		}
		
		$results->execute($this->client['database'])
			->as_array();

		$output = json_encode($results);
		$this->template->content = $output;
	}
	
	public function action_get_all()
	{
		
		$results = DB::select('*')
			->from('stands')
			->where('default_stand', '=', 0)
			->execute($this->client['database'])
			->as_array();

		$output = json_encode($results);
		$this->template->content = $output;
	
	}
	
	public function action_get_theme()
	{
		$id = Arr::get($_REQUEST, 'id', '');
		$results = DB::select('t.id', 't.parent_theme_id')
			->from(array('themes', 't'))
			->join(array('stands_themes', 'st'))
			->on('st.theme_id', '=', 't.id')
			->where('st.stand_id', '=', $id)
			//->and_where('t.parent_theme_id', '=', NULL)
			->execute($this->client['database'])
			->as_array();
		if(!$results)
		{
			$output = json_encode(FALSE);
		$this->template->content = $output;
		}
		else
		{
			$results = $results[0];
		$output = json_encode($results);
		$this->template->content = $output;
		}
		
	}
	
	public function action_get_zones()
	{
		$id = Arr::get($_REQUEST, 'id', '');
		$results = DB::select('id')
			->from('stands_zones')
			->where('stand_id', '=', $id)
			->execute()
			->as_array();
		$output = json_encode($results);
		$this->template->content = $output;
	}
	
	public function action_add_zone()
	{
		$stand_id = Arr::get($_REQUEST, 'stand_id', '');
		$zone_id =  Arr::get($_REQUEST, 'zone_id', '');
		$results = DB::insert('stands_zones', array('stand_id', 'zone_id', 'sort'))
			->values(array($stand_id, $zone_id, $sort))
			->execute();
		if(count($results) > 0)
		{
			$output = 1;
		}
		else
		{
			$output = 0;
		}
		$this->template->content = $output;
	}
	
	public function action_add_subtheme()
	{
		$zone_ids = DB::select('zone_id')
			->from(array('stands_zones', 'sz'))
			->join(array('stands_themes', 'st'))
			->on('sz.stand_id', '=', 'st.stand_id')
			->where('st.theme_id', '=', $theme_id)
			->execute()
			->as_array();
	}
	
	public function action_change_subtheme()
	{
		
	}
	
	public function action_get_all_themes_subthemes()
	{
		
		
		$stands_themes = DB::select(array('st.theme_id', 'subtheme_id'), 'st.stand_id', array('s.name', 'stand_name'), array('t.name', 'subtheme_name'), array('t.parent_theme_id', 'theme_id'), array('s.power_state', 'power_state'), array('s.tv_model', 'tv_model'))
			->from(array('stands_themes', 'st'))
			->join(array('stands', 's'))
			->on('st.stand_id', '=', 's.id')
			->join(array('themes', 't'))
			->on('t.id', '=', 'st.theme_id')
			->where('default_stand', '=', 0)
			->order_by('stand_name', 'ASC')
			->execute($this->client['database'])
			->as_array();
		
		foreach($stands_themes as &$stand)
		{
			$parent_theme = DB::select(array('t.name', 'theme_name'))
				->from(array('themes', 't'))
				->where('t.id', '=', $stand['theme_id'])
				->execute($this->client['database'])
				->as_array();
			
			$stand['theme_name'] = $parent_theme[0]['theme_name'];
		}
		
		$output = json_encode($stands_themes);
		$this->template->content = $output;
	}
	
	public function action_get_all_profile_names()
	{
		$stands = DB::select('id', 'name')
			->from('stands')
			->where('default_stand', '=', 0)
			->execute($this->client['database'])
			->as_array();
		
		$profiles = array();
		
		foreach($stands as $stand)
		{
			$profile_name = str_replace('-', '', str_replace(' ', '', strtolower($stand['name']))). '-profile-' . $stand['id'];
			$profiles[$stand['name']] = $profile_name;
		}
		
		$output = json_encode($profiles);
		$this->template->content = $output;
	}
	
	public function action_power(){
		$stand_name = Arr::get($_REQUEST, 'stand_name');
		$power_state = (int)Arr::get($_REQUEST, 'power_state');
		
		$result = DB::update('stands')
			->set(array(
				'power_state' => $power_state,
				'command_sent_time' => time()
				))
			->where('name', '=', $stand_name)
			->execute($this->client['database']);
		
		$output = json_encode($result);
		$this->template->content = $output;
	}
	
	public function action_change_tv_model(){
		$stand_id = Arr::get($_REQUEST, 'stand_id');
		$tv_model = Arr::get($_REQUEST, 'tv_model');
		
		$result = DB::update('stands')
			->set(array('tv_model' => $tv_model))
			->where('id', '=', $stand_id)
			->execute($this->client['database']);
		
		$output = json_encode($result);
		$this->template->content = $output;
	}
	
}