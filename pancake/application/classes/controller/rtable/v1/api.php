<?php

defined('SYSPATH') OR die('No direct access allowed.');

/** * Pancake Controller events * Created Oct 10, 2012 11:22:27 AM * @author equemuel */
class Controller_Rtable_v1_Api extends Controller_Templates_APIv1
{

	public $template = 'api/v1/base';
    
    public function before()
    {
    
    }

	public function action_get_content()
	{
        $client_id = DB::select('id')
            ->from('clients')
            ->where('system_name', '=', 'rtable')
            ->execute()
            ->get('id');
        
		$today = mktime(0, 0, 0);
		$results = DB::select('m.path', 'e.title', 'e.description')
			->from(array('event', 'e'))
			->join(array('event_has_media', 'ehm'))
			->on('ehm.event_id', '=', 'e.id')
			->join(array('media', 'm'))
			->on('ehm.media_id', '=', 'm.id')
			->where('e.date', '=', $today)
			->where('m.approved', '=', 1)
			->execute(PancakeClient::database_instance($client_id))
			->as_array();
		$content = array();
		$nid = 1000;
		foreach ($results as $result)
		{
			$parts = explode('media/rtable/', $result['path']);
			$filename = $parts[1];
			$content[] = array(
				'nid' => $nid,
				'media' => $filename,
				'sort' => 0,
				'template' => 'something static',
				'templateConfig' => array(
					"x" => 0,
					"y" => 0,
					"textColor" => "0xFFFFFF",
					"delay" => 2,
					"banner" => array(
						array(
							'label' => $result['title']
						)
					),
					"message" => array(
						array(
							'label' => $result['description']
						)
					)
				),
				'duration' => 30
			);
			$nid++;
		}
		echo json_encode($content);
		exit;
	}

}