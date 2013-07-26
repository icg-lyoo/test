<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Greyhound_v1_Schedule extends Controller_Templates_APIv1
{

	public function action_upload()
	{

		$data = file_get_contents('http://' .BASE_URL . '/c/archive/greyhound/schedule/greyhound_schedule.xlsx');
		if($data)
		{
			$file = $_SERVER['DOCUMENT_ROOT'].'/greyhound_schedule.xlsx';
			$result = file_put_contents($file, $data);
			if($result)
			{
				$this->template->content = GreyhoundSchedule::process_file($file);
			}
			else
			{
				$this->template->content = json_encode(0);
			}
		}
		else
		{
			$this->template->content = json_encode(0);
		}
	}

	/**
	 * https://icgmanager.atlassian.net/wiki/x/EYA6
	 */
	public function action_feed()
	{
		$schedule_num = Arr::get($_REQUEST, 'num', '');
		$from_ts = Arr::get($_POST, 'from', 0);
		$to_ts = Arr::get($_POST, 'to', '');
		$now = time();
		$updated_schedule = DB::select('*')
			->from('temp_schedule')
			->where('start_ts', '<', $now)
			->and_where('end_ts', '>', $now)
			->execute($this->client['database'])
			->as_array();
		$feed_query = DB::select('s.num', 's.start_ts', 's.end_ts', 's.arrival_time', 's.freq', 's.status', 's.gate', 'l.name', 'l.state')
			->from(array('schedule', 's'))
			->join(array('locations', 'l'))
			->on('l.id', '=', 's.dest_id')
			->where('start_ts', '>=', $from_ts);

		if (!empty($to_ts) && is_numeric($to_ts))
		{
			$feed_query->and_where('end_ts', '<=', $to_ts);
		}
		if (!empty($schedule_num) && is_numeric($schedule_num))
		{
			$feed_query->and_where('num', '=', $schedule_num);
		}
		
		$results = $feed_query->order_by('name', 'ASC')
			->execute($this->client['database'])
			->as_array();
		
		if (!empty($updated_schedule))
		{
			foreach ($updated_schedule as $schedule)
			{
				foreach ($results as &$result)
				{
					if ($result['num'] == $schedule['num'])
					{
						if ($schedule['arrival_time'])
						{
							$result['arrival_time'] = $schedule['arrival_time'];
						}
						if ($schedule['status'])
						{
							$result['status'] = $schedule['status'];
						}
						if ($schedule['gate'])
						{
							$result['gate'] = $schedule['gate'];
						}
					}
				}
			}
		}
		$this->template->content = json_encode($results);
	}

	public function action_update()
	{
//		$schedule_id = Arr::get($_REQUEST, 'scheduleid', 0);
//		if ($schedule_id > 0)
//		{
			try
			{
				$result = GreyhoundSchedule::update($_REQUEST);
				$output = PancakeResponse::out($result);
			}
			catch (Exception $e)
			{
				$output = PancakeResponse::out(FALSE, $e->getMessage());
			}
//		}
//		else
//		{
//			$output = PancakeResponse::out(FALSE, Kohana::message('greyhound', 'invalid_schedule_id'));
//		}

		$this->template->content = $output;
	}

}