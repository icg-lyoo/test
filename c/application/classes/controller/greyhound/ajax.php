<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Greyhound_AJAX extends Controller_Icg_v1_Icg
{

	public function action_get_schedule()
	{
		//returns the raw json string from the api
		$r = $this->_pancake_call('greyhound', 'schedule','feed');

		//format the api return to match the dataTables format
		$decoded_r = json_decode($r);

		$this->format_json_timestamp_freq($decoded_r);

		//set correct value for dataTables to process
		$sEcho = intval($this->request->query('sEcho'));
		$iDisplay = $this->request->query('iDisplayLength');
		$total_rows = count($decoded_r);

		$formatted_array = array(
			'aaData' => $decoded_r,
		);

		$jsoned_array = json_encode($formatted_array);

		echo $jsoned_array;
	}

	public function action_set_schedule()
	{
		//http://equemuel.icgtest.info/pancake/greyhound/v1/schedule/update/
		if ($_POST)
		{
			$param_array = array();

			//filter for empty param
			foreach ($_POST as $key => $post)
			{
				if ($post)
				{
					$param_array[$key] = (int) $post;
				}
			}

			//set correct url and action to send to pancake
//			$api_url = PANCAKE_URL . 'greyhound/v1/schedule';
//			$action = 'update';
//			$r = $this->request_pancake($action, $api_url, $param_array);
			$r = $this->_pancake_call('greyhound', 'schedule','update', $param_array);


			echo $r;
		}
		else
		{
			echo 'Error. No data was sent.';
		}
	}

	//this is used to validate the time the user submits.
	public function action_offset_end_ts()
	{

		$offset = 12;

		if (isset($_GET['offset']))
		{
			$offset = (int) $_GET['offset'];
		}

		//multiple offset to get the number of seconds
		$time = time() + ($offset * 60 * 60);

		echo $time;
	}

	


	private function format_json_timestamp_freq(&$data)
	{

		$day_string_offset = array(
			'7' => 'Sun',
			'1' => 'Mon',
			'2' => 'Tue',
			'3' => 'Wed',
			'4' => 'Thur',
			'5' => 'Fri',
			'6' => 'Sat'
		);

		$status_code = array(
			'1' => 'On Time',
			'2' => 'Arrived',
			'3' => 'Early',
			'4' => 'Delayed',
		);

		$row = 1;
		foreach ($data as $d)
		{

			$d->DT_RowId = 'row_' . $d->num;
			$d->start_ts = date('F j, Y', $d->start_ts);
			$d->end_ts = date('F j, Y', $d->end_ts);

			$days_of_week = $this->get_bitwise_days($d->freq);

			$day_of_week_string = '';
			foreach ($days_of_week as $day)
			{
				$day_of_week_string .= ' ' . $day_string_offset[$day];
			}

			$d->freq = $day_of_week_string;

			$d->status = (isset($status_code[$d->status])) ? $status_code[$d->status] : $status_code[1];

			$row++;
		}
	}

	private function get_bitwise_days($bit)
	{
		$bitwise_date_data = array(
			1 => array('dow' => 'Sun', 'offset' => 7),
			2 => array('dow' => 'Mon', 'offset' => 1),
			4 => array('dow' => 'Tue', 'offset' => 2),
			8 => array('dow' => 'Wed', 'offset' => 3),
			16 => array('dow' => 'Thru', 'offset' => 4),
			32 => array('dow' => 'Fri', 'offset' => 5),
			64 => array('dow' => 'Sat', 'offset' => 6),
		);

		$r = array();

		foreach ($bitwise_date_data as $key => $arr)
		{
			if ($bit & $key)
			{
				$r[] = $arr['offset'];
			}
		}

		return $r;
	}

	public function action_upload_file()
	{
		$timestamp = Arr::get($_POST, 'timestamp', 0);
		$new_upload = ($timestamp == 0) ? TRUE : FALSE;
		$timestamp = ($new_upload) ? time() : $timestamp;

		$schedules_directory = './archive/greyhound/schedule/';
		$schedules_fname = 'greyhound_schedule.xlsx';

		$return = array('status' => 0, 'message' => '');
		if ($new_upload)
		{
			$parts = explode(".", $_FILES["schedule_xlsx"]["name"]);
			$extension = end($parts);
		}
		else
		{
			$extension = 'xlsx';
		}

		if ($extension == 'xlsx')
		{
			if ($new_upload)
			{
				$upload_success = move_uploaded_file($_FILES['schedule_xlsx']['tmp_name'], $schedules_directory . $timestamp . $schedules_fname);
				if (!$upload_success)
				{
					$return['status'] = 0;
					$return['message'] = 'Uploading of file failed';
					echo(json_encode($return));
					exit;
				}
			}

			if (file_exists($schedules_directory . $schedules_fname))
			{
				unlink($schedules_directory . $schedules_fname);
			}
			if (copy($schedules_directory . $timestamp . $schedules_fname, $schedules_directory . $schedules_fname))
			{
				$fields = array(
					'schedule_xlsx' => $schedules_directory . $schedules_fname
				);
				$result = $this->_pancake_call('greyhound', 'schedule','upload', $fields);
				if ($result != 0 && $result != '0')
				{
					$return['message'] = 'Successfully uploaded the new schedule';
					$return['status'] = 1;
				}
				else
				{
					unlink($schedules_directory . $timestamp . $schedules_fname);
					$latest_schedule = $this->get_latest_schedule();
					copy($schedules_directory . $latest_schedule, $schedules_directory . $schedules_fname);
					$return['message'] = 'There was an error processing the new schedule';
					$return['status'] = 0;
				}
			}
			else
			{
				$return['message'] = 'Saving the new schedule failed';
				$return['status'] = 0;
			}
		}
		else
		{
			$return['status'] = 0;
			$return['message'] = 'File type not supported';
		}
		echo(json_encode($return));
	}

	private function get_latest_schedule()
	{
		$files = scandir('./archive/greyhound/schedule');
		$latest_timestamp = 0;
		foreach ($files as $file)
		{
			$part = substr($file, -23);
			if ($part == 'greyhound_schedule.xlsx')
			{
				$parts = explode('greyhound_schedule.xlsx', $file);
				$timestamp = $parts[0];
				if ($timestamp != '')
				{
					if ($timestamp > $latest_timestamp)
					{
						$latest_timestamp = $timestamp;
					}
				}
			}
		}
		return $latest_timestamp . 'greyhound_schedule.xlsx';
	}

	public function action_get_backup_dates()
	{
		$files = scandir('./archive/greyhound/schedule');
		$available_files = array();
		foreach ($files as $file)
		{
			$part = substr($file, -23);
			if ($part == 'greyhound_schedule.xlsx')
			{
				$parts = explode('greyhound_schedule.xlsx', $file);
				$timestamp = $parts[0];
				if ($timestamp != '')
				{
					date_default_timezone_set('America/New_York');
					$date = date('m/d/Y h:i a', (int) $timestamp);
					$available_files[] = array(
						'date' => $date,
						'timestamp' => $timestamp
					);
				}
			}
		}
		echo(json_encode($available_files));
	}

	public function after()
	{
		
	}

}

