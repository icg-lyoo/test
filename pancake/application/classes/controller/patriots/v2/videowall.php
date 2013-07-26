<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Patriots_v1_Videowall extends Controller_Templates_APIv1
{
	public function action_get_all_video_wall(){
        $results = DB::select('vw.id','vw.name', 'vw.power_state', 'vw.tv_model')
			->from(array('video_walls', 'vw'))
			->execute($this->client['database'])
			->as_array();

        $output = json_encode($results);
		$this->template->content = $output;
        
    }
	
}