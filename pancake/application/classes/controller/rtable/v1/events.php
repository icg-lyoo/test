<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Pancake Controller events
 * 
 * Created Oct 10, 2012 11:22:27 AM
 * @author equemuel
 */
class Controller_Rtable_v1_Events extends Controller_Templates_APIv1
{

	public $template = 'api/v1/base';
	
	public function action_get_count()
	{
		$media_status = strtolower(Arr::get($_REQUEST, 'status'));
		$today = mktime(0, 0, 0);
//		$result = DB::select('id')
//			->from('event')
//			->where('date', '>=', $today)
//			->execute($this->client['database'])
//			->as_array();
//		
//		$count = count($result);
		
		if($media_status != 'no media')
		{
			$event_query = DB::select('e.title', 'e.description', 'e.date', 'c.email', 'c.name', 'e.id')
				->from(array('event', 'e'))
				->join(array('consumer_has_event', 'che'))
				->on('che.event_id', '=', 'e.id')
				->join(array('consumer', 'c'))
				->on('c.id', '=', 'che.consumer_id');
				
			if($media_status != 'any')
			{
				$event_query->join(array('event_has_media', 'ehm'))
					->on('ehm.event_id', '=', 'e.id')
					->join(array('media', 'm'))
					->on('m.id', '=', 'ehm.media_id');
				if($media_status == 'processing')
				{
					$event_query->where('m.active', '=', 0)
						->where('m.approved', '=', 0);
				}
				elseif($media_status == 'awaiting')
				{
					$event_query->where('m.active', '=', 1)
						->where('m.approved', '=', 0);
				}
				elseif($media_status == 'approved')
				{
					$event_query->where('m.active', '=', 1)
						->where('m.approved', '=', 1);
				}
			}
			$event_query->where('date', '>=', $today);
			$event_info = $event_query->execute($this->client['database'])
				->as_array();

			if ($event_info)
			{
				foreach ($event_info as &$event)
				{
					$media = DB::select('m.title', 'm.path', 'm.preview_path', 'm.active', 'm.approved')
						->from(array('media', 'm'))
						->join(array('event_has_media', 'ehm'))
						->on('ehm.media_id', '=', 'm.id')
						->where('ehm.event_id', '=', $event['id'])
						->execute($this->client['database'])
						->as_array();
					if($media) $event['media'] = $media[0];
				}
				$status = TRUE;
				$data = $event_info;
				$message = '';
			}
			else
			{
				$message = 'No events were found';
			}
		}
		elseif($media_status == 'no media')
		{
			$event_query = DB::select('e.title', 'e.description', 'e.date', 'c.email', 'c.name', 'e.id')
				->from(array('event', 'e'))
				->join(array('consumer_has_event', 'che'))
				->on('che.event_id', '=', 'e.id')
				->join(array('consumer', 'c'))
				->on('c.id', '=', 'che.consumer_id')
				->join(array('event_has_media', 'ehm'), 'left outer')
				->on('ehm.event_id', '=', 'e.id')
				->where('ehm.media_id', 'IS', NULL)
				->where('date', '>=', $today);
			$event_info = $event_query->execute($this->client['database'])
				->as_array();
			$status = TRUE;
			$data = $event_info;
			$message = '';
		}
		if(isset($data)) $count = count($data);
		else $count = 0;
		$output = PancakeResponse::out(TRUE, 'There are ' . $count . ' events', array('count' => $count));
		echo $output;
		exit;
	}
	
	public function action_delete()
	{
		$event_id = Arr::get($_REQUEST, 'event_id', NULL);
		$status = FALSE;
		if($event_id)
		{
			$che_result = DB::delete('consumer_has_event')
				->where('event_id', '=', $event_id)
				->execute($this->client['database']);
			if($che_result)
			{
				$ehm_result = DB::delete('event_has_media')
					->where('event_id', '=', $event_id)
					->execute($this->client['database']);

				$del_result = DB::delete('event')
					->where('id', '=', $event_id)
					->execute($this->client['database']);
				if($del_result)
				{
					$message = "Event successfully deleted";
					$status = TRUE;
				}
				else
				{
					$message = "Error deleting event";
				}

			}
			else
			{
				$message = "Error deleting consumer and event relationship.";
			}
		}
		
		$output = PancakeResponse::out($status, $message);
		echo $output;
		exit;

	}

	public function action_get()
	{
		$event_id = Arr::get($_REQUEST, 'event_id');

		$event_info = DB::select('e.title', 'e.description', 'e.date', 'c.email', 'c.name', 'e.id', 'e.event_code')
			->from(array('event', 'e'))
			->join(array('consumer_has_event', 'che'))
			->on('che.event_id', '=', 'e.id')
			->join(array('consumer', 'c'))
			->on('c.id', '=', 'che.consumer_id')
			->where('e.id', '=', $event_id)
			->execute($this->client['database'])
			->as_array();

		$media = DB::select('m.title', 'm.path', 'm.preview_path', 'm.active', 'm.approved', 'm.id', 'm.type')
			->from(array('media', 'm'))
			->join(array('event_has_media', 'ehm'))
			->on('ehm.media_id', '=', 'm.id')
			->where('ehm.event_id', '=', $event_id)
			->execute($this->client['database'])
			->as_array();

		$status = ($event_info) ? TRUE : FALSE;
		$data['event'] = ($event_info) ? $event_info : FALSE;
		if ($media)
			$data['event'][0]['media'] = $media[0];
		$output = PancakeResponse::out($status, '', $data);
		echo $output;
		exit;
//		$this->template->content = $output;
	}

	public function action_create()
	{
		$title = Arr::get($_REQUEST, 'title', NULL);
		$description = Arr::get($_REQUEST, 'description', NULL);
		$date = Arr::get($_REQUEST, 'date', '01-01-1970');
		$consumer_name = Arr::get($_REQUEST, 'consumer_name', NULL);
		$consumer_email = Arr::get($_REQUEST, 'consumer_email', NULL);

		$parts = explode("/", $date);
		$month = (int)$parts[0];
		$day = (int)$parts[1];
		$year = (int)$parts[2];
		$timestamp = mktime(0, 0, 0, $month, $day, $year);
		
		$status = FALSE;
		$data = array();
		$event_code = 'RT' . substr(md5(rand(0, 10000)), 0, 7);
		$event_id = DB::insert('event', array('title', 'description', 'date', 'event_code'))
			->values(array($title, $description, $timestamp, $event_code))
			->execute($this->client['database']);
		if ($event_id)
		{
			$consumer_id = DB::insert('consumer', array('email', 'name'))
				->values(array($consumer_email, $consumer_name))
				->execute($this->client['database']);
			if ($consumer_id)
			{
				$rel_success = DB::insert('consumer_has_event', array('event_id', 'consumer_id'))
					->values(array($event_id[0], $consumer_id[0]))
					->execute($this->client['database']);

				if (!$rel_success)
				{
					$message = 'Error creating the consumer and event relationship';
					DB::delete('event')
						->where('id', '=', $event_id)
						->execute($this->client['database']);
					DB::delete('consumer')
						->where('id', '=', $consumer_id)
						->execute($this->client['database']);
				}
				else
				{
//					$message = 'Event created successfully';
					$encoded_result = Request::factory("rtable/v1/mail/event_approval")->query('event_id', $event_id[0])->execute()->body();
					$result = json_decode($encoded_result, TRUE);
					if($result['meta']['status'] == 1)
					{
						$message = 'Event created successfully';
					}
					else
					{
						$message = 'Event created successfully, but sending of email failed';
					}
					$status = TRUE;
					$data['event_id'] = $event_id[0];
					$data['event_code'] = $event_code;
				}
			}
			else
			{
				$message = 'Error creating the consumer';
				DB::delete('event')
					->where('id', '=', $event_id)
					->execute($this->client['database']);
			}
		}
		else
		{
			$message = 'Error creating the event';
		}

		$output = PancakeResponse::out($status, $message, $data);
		echo $output;
		exit;
//		$this->template->content = $output;
	}

	public function action_edit()
	{
		$event_id = Arr::get($_REQUEST, 'event_id', NULL);
		$fields = array();
		$fields['title'] = Arr::get($_REQUEST, 'title', NULL);
		$fields['description'] = Arr::get($_REQUEST, 'description', NULL);
		$fields['date'] = Arr::get($_REQUEST, 'date', NULL);
		$fields['name'] = Arr::get($_REQUEST, 'name', NULL);
		$fields['email'] = Arr::get($_REQUEST, 'email', NULL);
		if($fields['date'])
                {
                    $parts = explode("/", $fields['date']);
                    $month = $parts[0];
                    $day = $parts[1];
                    $year = $parts[2];
                    $fields['date'] = mktime(0, 0, 0, $month, $day, $year);
                }
		$status = FALSE;

		$at_least_one_field = false;

		foreach ($fields as $value)
		{
			if ($value)
			{
				$at_least_one_field = true;
				break;
			}
		}

		if ($event_id && $at_least_one_field)
		{
			if ($fields['name'] || $fields['email'])
			{
				$consumer_id = DB::select('c.id')
					->from(array('consumer', 'c'))
					->join(array('consumer_has_event', 'che'))
					->on('c.id', '=', 'che.consumer_id')
					->where('che.event_id', '=', $event_id)
					->execute($this->client['database'])
					->as_array();
				$consumer_id = $consumer_id[0];
			}


			$consumer_update_array = array();
			$event_update_array = array();

			foreach ($fields as $field => $value)
			{
				if ($value)
				{
					if ($field == 'email' || $field == 'name')
					{
						$consumer_update_array[$field] = $value;
					}
					else
					{
						$event_update_array[$field] = $value;
					}
				}
			}

			$fields_updated = 0;

			if (count($consumer_update_array) > 0)
			{
				$consumer_update_result = DB::update('consumer')
					->set($consumer_update_array)
					->where('id', '=', $consumer_id)
					->execute($this->client['database']);
				$fields_updated += $consumer_update_result;
			}
			if (count($event_update_array) > 0)
			{
				$event_update_result = DB::update('event')
					->set($event_update_array)
					->where('id', '=', $event_id)
					->execute($this->client['database']);
				$fields_updated += $event_update_result;
			}
			if ($fields_updated > 0)
			{
				$status = TRUE;
				$message = $fields_updated . ' fields were updated successfully.';
			}
			else
			{
				$status = TRUE;
				$message = 'No fields were changed';
			}
		}
		else
		{
			$message = 'Either event id is missing, or there are no fields to update';
		}

		$output = PancakeResponse::out($status, $message);
		echo $output;
		exit;
//		$this->template->content = $output;
	}

	public function action_get_list()
	{
		$order_by= strtolower(Arr::get($_REQUEST, 'order_by'));
		$limit = Arr::get($_REQUEST, 'limit');
		$offset = Arr::get($_REQUEST, 'offset');
		$asc = Arr::get($_REQUEST, 'asc', false);
		$media_status = strtolower(Arr::get($_REQUEST, 'status', 'any'));
		$data = array();
		$status = FALSE;
		$today = mktime(0, 0, 0);
		
		if($media_status != 'no media')
		{
			$event_query = DB::select('e.title', 'e.description', 'e.date', 'c.email', 'c.name', 'e.id')
				->from(array('event', 'e'))
				->limit($limit)
				->offset($offset)
				->join(array('consumer_has_event', 'che'))
				->on('che.event_id', '=', 'e.id')
				->join(array('consumer', 'c'))
				->on('c.id', '=', 'che.consumer_id');
				
			if($media_status != 'any')
			{
				$event_query->join(array('event_has_media', 'ehm'))
					->on('ehm.event_id', '=', 'e.id')
					->join(array('media', 'm'))
					->on('m.id', '=', 'ehm.media_id');
				if($media_status == 'processing')
				{
					$event_query->where('m.active', '=', 0)
						->where('m.approved', '=', 0);
				}
				elseif($media_status == 'awaiting')
				{
					$event_query->where('m.active', '=', 1)
						->where('m.approved', '=', 0);
				}
				elseif($media_status == 'approved')
				{
					$event_query->where('m.active', '=', 1)
						->where('m.approved', '=', 1);
				}
			}
			$event_query->where('date', '>=', $today);
			if(!$asc)
			{
				if($order_by == 'email')
				{
					$event_query->order_by('c.' .$order_by, 'DESC');
				}
				else
				{
					$event_query->order_by('e.' . $order_by, 'DESC');
				}
			}
			else
			{
				if($order_by == 'email')
				{
					$event_query->order_by('c.' .$order_by);
				}
				else
				{
					$event_query->order_by('e.' . $order_by);
				}
			}
			$event_info = $event_query->execute($this->client['database'])
				->as_array();

			if ($event_info)
			{
				foreach ($event_info as &$event)
				{
					$media = DB::select('m.title', 'm.path', 'm.preview_path', 'm.active', 'm.approved')
						->from(array('media', 'm'))
						->join(array('event_has_media', 'ehm'))
						->on('ehm.media_id', '=', 'm.id')
						->where('ehm.event_id', '=', $event['id'])
						->execute($this->client['database'])
						->as_array();
					if($media) $event['media'] = $media[0];
				}
				$status = TRUE;
				$data = $event_info;
				$message = '';
			}
			else
			{
				$message = 'No events were found';
			}
		}
		elseif($media_status == 'no media')
		{
			$event_query = DB::select('e.title', 'e.description', 'e.date', 'c.email', 'c.name', 'e.id')
				->from(array('event', 'e'))
				->limit($limit)
				->offset($offset)
				->join(array('consumer_has_event', 'che'))
				->on('che.event_id', '=', 'e.id')
				->join(array('consumer', 'c'))
				->on('c.id', '=', 'che.consumer_id')
				->join(array('event_has_media', 'ehm'), 'left outer')
				->on('ehm.event_id', '=', 'e.id')
				->where('ehm.media_id', 'IS', NULL)
				->where('date', '>=', $today);
			if(!$asc)
			{
				if($order_by == 'email')
				{
					$event_query->order_by('c.' .$order_by, 'DESC');
				}
				else
				{
					$event_query->order_by('e.' . $order_by, 'DESC');
				}
			}
			else
			{
				if($order_by == 'email')
				{
					$event_query->order_by('c.' .$order_by);
				}
				else
				{
					$event_query->order_by('e.' . $order_by);
				}
			}
			$event_info = $event_query->execute($this->client['database'])
				->as_array();
			$status = TRUE;
			$data = $event_info;
			$message = '';
		}

		$output = PancakeResponse::out($status, $message, $data);
		echo $output;
		exit;
//		$this->template->content = $output;
	}

	public function after()
	{
		$this->response->headers('Content-type', $this->_type);
		parent::after();
	}

}