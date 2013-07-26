<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Rtable_Events extends Controller_Icg_v1_Icg
{

	protected $login_page = "/rtable/events/login";

	public function action_index()
	{
		$this->action_list();
	}

	public function action_list()
	{
		if (!$this->admin)
		{
			Request::initial()->redirect('rtable/events/login');
		}

		$current_status = Arr::get($_POST, 'status'        , 'Any'      );
		$resultSet 		= Arr::get($_POST, 'resultSet'     , 1 			);
		$rowsAllowed 	= Arr::get($_POST, 'limit'         , 12 		);
		$sortBy 		= Arr::get($_POST, 'sortBy'		   , 'Date'		);
		$sortDir 		= Arr::get($_POST, 'sortDirection' , 'Ascending');

		$asc 			= ($sortDir == 'Descending') ? false : true;

		$status_data 				   = array('status' => $current_status);
		$rows_returned_results_encoded = $this->_pancake_call('rtable', 'events','get_count', $status_data);
		$rows_returned_results 		   = json_decode($rows_returned_results_encoded, TRUE);
		$rowsReturned 				   = $rows_returned_results['data']['count'];

		$paginate_data  = $this->paginate($rowsReturned, $rowsAllowed, $resultSet, $asc, $sortBy, $current_status);

		$encoded_result = $this->_pancake_call('rtable', 'events','get_list', $paginate_data);
		
		$result 		= json_decode($encoded_result, TRUE);
		$data 			= $result['data'];

		foreach ($data as &$event_data)
		{
			$active 			 = !empty($event_data['media']['path']) 	? $event_data['media']['active']   : null;
			$approval 			 = !empty($event_data['media']['approved']) ? $event_data['media']['approved'] : 0;
			$event_data['title'] = $this->format_event_title($event_data['title']);

			if (empty($event_data['media']['preview_path']) || !isset($event_data['media']['preview_path']))
			{
				$event_data['preview'] 		  = '/c/assets/rtable/video_placeholder.png';
				$event_data['current_status'] = $this->set_media_state($active, $approval);
			}
			else
			{
				$event_data['preview']        = '/c/' . $event_data['media']['preview_path'];
				$event_data['current_status'] = $this->set_media_state($active, $approval);
			}
		}

		$view                 = View::factory('rtable/events/list');
		$view->sortBy         = $sortBy;
		$view->paginate 	  = $paginate_data;
		$view->sortDirection  = $sortDir;
		$view->current_status = $current_status;
		$view->data 		  = $data;

		$this->response->body($view);
	}

	public function action_disclaimer()
	{
		$this->response->body(View::factory('rtable/events/disclaimer'));
	}

	public function action_create()
	{

		$this->response->body(View::factory('rtable/events/create'));
	}

	public function action_preview()
	{
		$event_id 		= $this->request->param('id');
		$encoded_result = $this->_pancake_call('rtable','events','get', array('event_id' => $event_id));
		$result 		= json_decode($encoded_result, TRUE);
		$data 			= $result['data']['event'][0];

		$swfData = $data['media'] != '' ? $this->_generateSWFJSON($result['data']['event'][0]['media']) : '';

		$flashvars = array(
			'mediaPath'   => '/c/media/rtable/',
			'bgImg' 	  => "/c/assets/rtable/media_preview_bg.jpg",
			'promoOffset' => '0,0',
			'scalable'    => "1",
			'preview'     => '1',
			'debug' 	  => TRUE,
		);

		$view 			 = View::factory('rtable/events/preview');
		$view->flashvars = $flashvars;
		$view->swfData   = $swfData;
		$view->data 	 = $data;
		$view->event_id  = $event_id;
		$view->admin 	 = $this->admin;
		$this->response->body($view);
	}

	private function _generateSWFJSON($media = array(), $title = "", $description = "")
	{

		$result_array = array();
		$i = 1000;
		if (!is_array($media))
			$media = array($media);
			$parts = explode('/', $media['path']);
		$file_name = end($parts);
		$result_array[] = array(
			'pid' => $i,
			'media' => $file_name,
			'sort' => 0,
			'template' => 'something static',
			'templateConfig' => array(
				'x' => 0,
				'y' => 0,
				'textColor' => '0xFFFFFF',
				'delay' => 2,
				'banner' => array(
					array(
						"label" => $title
					)
				),
				'message' => array(
					array(
						"label" => $description
					)
				)
			),
			'duration' => 10
		);
		$i++;


		return $result_array;
	}

	public function action_edit()
	{
		if (!$this->admin)
		{
			$event_id = Session::instance()->get('event_id');
			if (!$event_id)
			{
				Request::initial()->redirect('rtable/events/login');
			}
		}
		else
		{
			$event_id = $this->request->param('id');
		}

		$result = json_decode($this->_pancake_call('rtable', 'events','get', array('event_id' => $event_id)), TRUE);
		$data   = $result['data']['event'][0];

		if ($event_id)
			$data['id'] = $event_id;

		$view 		 = View::factory('rtable/events/edit');
		$view->admin = $this->admin;
		$view->data  = $data;

		$this->response->body($view);
	}

	public function action_edit_media()
	{
		if (!$this->admin)
		{
			$event_id = Session::instance()->get('event_id');
			if (!$event_id)
			{
				Request::initial()->redirect('rtable/events/login');
			}
		}
		else
		{
			$event_id = $this->request->param('id');
		}

		$result = json_decode($this->_pancake_call('rtable', 'events','get', array('event_id' => $event_id)), TRUE);
		$data = $result['data']['event'][0];

		$swfData = array_key_exists('media', $data) ? $this->_generateSWFJSON($result['data']['event'][0]['media'], $result['data']['event'][0]['title'], $result['data']['event'][0]['description']) : '';

		$flashvars = array(
			"mediaPath"   => "/c/media/rtable/",
			"bgImg" 	  => "/c/assets/rtable/preview_bg.png",
			"promoOffset" => "578,52",
			"scalable"    => "0",
			"preview" 	  => "0",
			"debug" 	  => "1"
		);
		if ($event_id)
			$data['id'] = $event_id;

		$view 			 = View::factory('rtable/events/edit_media');
		$view->flashvars = $flashvars;
		$view->swfData   = $swfData;
		$view->admin     = $this->admin;
		$view->data 	 = $data;

		$this->response->body($view);
	}

	public function action_edit_complete()
	{
		if (!$this->admin)
		{
			$event_id = Session::instance()->get('event_id');
			if (!$event_id)
			{
				Request::initial()->redirect('rtable/events/login');
			}
		}
		else
		{
			$event_id = $this->request->param('id');
		}

		$result = json_decode($this->_pancake_call('rtable', 'events','get', array('event_id' => $event_id)), TRUE);
		$data   = $result['data']['event'][0];

		$swfData = array_key_exists('media', $data) ? $this->_generateSWFJSON($result['data']['event'][0]['media'], $result['data']['event'][0]['title'], $result['data']['event'][0]['description']) : '';

		$flashvars = array(
			"mediaPath"   => "/c/media/rtable/",
			"bgImg" 	  => "/c/assets/rtable/preview_bg.png",
			"promoOffset" => "578,52",
			"scalable" 	  => "0",
			"preview" 	  => "0",
			"debug" 	  => "1"
		);
		if ($event_id)
			$data['id'] = $event_id;

		$view 			 = View::factory('rtable/events/edit_complete');
		$view->flashvars = $flashvars;
		$view->swfData   = $swfData;
		$view->admin 	 = $this->admin;
		$view->data 	 = $data;

		$this->response->body($view);
	}

	public function action_login()
	{
		$view = View::factory('rtable/events/login');

		if (isset($_POST['consumer_email']))
		{
			$pancake_result = json_decode($this->_pancake_call('rtable', 'consumer','login', 
					array(
						'consumer_email' => $_POST['consumer_email'],
						'event_code' 	 => $_POST['event_code']
					)
				), true);

			if ($pancake_result['meta']['status'] != 1)
			{
				$view->errors = $pancake_result['meta']['message'];
			}
			else
			{
				$result = json_decode($this->_auth_call('login', array('username' => 'rtable_consumer', 'password' => 'AXLCbk001@49', 'remember' => false)), true);
				if ($result['meta']['status'] != 1)
				{
					$view->errors = $result['meta']['message'];
				}
				else
				{
					Cookie::set('session_id', $result['data']['session_id']);
					$session = Session::instance('database', $result['data']['session_id']);
					$session->set('event_id', $pancake_result['data']['event_id']);

					Request::initial()->redirect('event/edit');
				}
			}
		}
		$this->response->body($view);
	}

	public function paginate($rowsReturned, $rowsAllowed, $resultSet, $asc, $sortBy, $status)
	{
		$totalPages = ceil($rowsReturned / $rowsAllowed);

		if ($resultSet > $totalPages)
		{
			$resultSet = $totalPages;
		}
		elseif ($resultSet < 1)
		{
			$resultSet = 1;
		}

		$multiplier 		= ($resultSet <= 0) ? 0 : ($resultSet - 1);
		$currentResultStart = ($multiplier) * $rowsAllowed;
		$currentRangeLimit  = $rowsReturned < ($currentResultStart + $rowsAllowed) ? $rowsReturned : ($currentResultStart + $rowsAllowed);
		$showing		    = $rowsReturned < 1 ? 0 : ($currentResultStart + 1);
		$currentResultRange = "<small>Displaying results <b>" . $showing . "-" . $currentRangeLimit . "</b> of <b>" . $rowsReturned . "</b> </small>";

		$data = array(
			'limit' 			   => $rowsAllowed,
			'offset' 			   => $currentResultStart,
			'total_pages' 		   => $totalPages,
			'current_result_range' => $currentResultRange,
			'resultSet' 		   => $resultSet,
			'asc' 				   => $asc,
			'order_by' 			   => $sortBy,
			'status' 			   => $status
		);

		return $data;
	}

	public function action_logout()
	{
		Cookie::delete('session_id');
		if ($this->admin)
		{
			$this->request->redirect('/');
		}
		else
		{
			$this->request->redirect('/rtable/events/login');
		}
	}

	public function set_media_state($state = null, $approved)
	{
		switch ($state)
		{
			case null:
				return array("class" => "resultNone", "header" => "NO MEDIA UPLOADED");
				break;
			case 0:
				switch ($approved)
				{
					case 0:
						return array("class" => "resultProcessing", "header" => "PROCESSING");
						break;
				}
				break;
			case 1:
				switch ($approved)
				{
					case 0:
						return array("class" => "resultAwaiting", "header" => "AWAITING APPROVAL");
						break;
					case 1:
						return array("class" => "resultApproved", "header" => "APPROVED");
						break;
				}
				break;
		}
	}

	public function format_event_title($title)
	{
		$dots  = strlen($title) > 35 ? '...' : '';
		$title = substr($title, 0, 35) . $dots;
		$title = stripslashes(stripslashes($title));

		return $title;
	}
	
	public function action_get_content()
	{
		$result =$this->_pancake_call('rtable', 'api','get_content');
	}

}

