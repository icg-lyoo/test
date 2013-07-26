<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Videowall extends Controller_Templates_APIv1
{
	public function action_get_all_video_wall(){
        $results = DB::select('vw.id','vw.name', 'vw.stand_id', 'vw.power_state', 'vw.tv_model')
			->from(array('video_walls', 'vw'))
			->execute($this->client['database'])
			->as_array();

        $output = json_encode($results);
		$this->template->content = $output;
        
    }
    
    public function action_power(){
		$stand_name = Arr::get($_REQUEST, 'stand_name');
		$power_state = (int)Arr::get($_REQUEST, 'power_state');
		
		$result = DB::update('video_walls')
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