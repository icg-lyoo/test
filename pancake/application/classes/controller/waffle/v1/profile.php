<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Waffle_v1_Profile extends Controller_Templates_APIv1
{

	private $_no_auth_action = array(
		'add',
		'list_all',
		'add_hardware',
		'add_and_associate'
	);

	public function before()
	{
		// No authentication is required to access the following calls
		if (in_array($this->request->action(), $this->_no_auth_action))
		{
			$this->_auth_required = FALSE;
		}

		parent::before();
	}
	
	private function _add_new_profile($name, $extract_path, $launch, $update_interval, $auto_launch, $tz_offset, $push_url, $push_zone, $push_room, $client_id = NULL)
	{
		$profile_data['name'] = $name;
		$profile_data['extract_path'] = $extract_path;
		$profile_data['launch'] = $launch;
		$profile_data['update_interval'] = $update_interval;
		$profile_data['auto_launch'] = $auto_launch;
		$profile_data['tz_offset'] = $tz_offset;
		$profile_data['push_url'] = $push_url;
		$profile_data['push_zone'] = $push_zone;
		$profile_data['push_room'] = $push_room;

		try
		{
			$data = WaffleProfile::add($profile_data, $client_id);
			$output = PancakeResponse::out(TRUE, '', $data);
		}
		catch (PancakeException $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}
		return $output;
	}
	
	private function _add_hardware($hardware_id, $profile_id, $client_id)
	{
		try
		{
			WaffleHardware::add_profiles($hardware_id, $profile_id, $client_id);
			$output = PancakeResponse::out(TRUE);
		}
		catch (PancakeException $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}
		return $output;
	}

	public function action_add()
	{
		$name = Arr::get($_REQUEST, 'name');
		$extract_path = Arr::get($_REQUEST, 'extract_path');
		$launch = Arr::get($_REQUEST, 'launch');
		$update_interval = Arr::get($_REQUEST, 'update_interval');
		$auto_launch = Arr::get($_REQUEST, 'auto_launch');
		$tz_offset = Arr::get($_REQUEST, 'tz_offset');
		$push_url = Arr::get($_REQUEST, 'push_url');
		$push_zone = Arr::get($_REQUEST, 'push_zone');
		$push_room = Arr::get($_REQUEST, 'push_room');

		$output = $this->_add_new_profile($name, $extract_path, $launch, $update_interval, $auto_launch, $tz_offset, $push_url, $push_zone, $push_room, $client_id);

		$this->template->content = $output;
	}
	
	public function action_add_and_associate()
	{
		$name = Arr::get($_REQUEST, 'name');
		$extract_path = Arr::get($_REQUEST, 'extract_path');
		$launch = Arr::get($_REQUEST, 'launch');
		$update_interval = Arr::get($_REQUEST, 'update_interval');
		$auto_launch = Arr::get($_REQUEST, 'auto_launch');
		$tz_offset = Arr::get($_REQUEST, 'tz_offset');
		$push_url = Arr::get($_REQUEST, 'push_url');
		$push_zone = Arr::get($_REQUEST, 'push_zone');
		$push_room = Arr::get($_REQUEST, 'push_room');
		$hardware_id = Arr::get($_POST, 'hardwareid', 0);
		$client_id = Arr::get($_POST, 'client_id', NULL);
		
		$encoded_output = $this->_add_new_profile($name, $extract_path, $launch, $update_interval, $auto_launch, $tz_offset, $push_url, $push_zone, $push_room, $client_id);
		$decoded_output = json_decode($encoded_output, TRUE);
		if($decoded_output['meta']['status'])
		{
			try
			{
				$output = $this->_add_hardware($hardware_id, $decoded_output['data'][0], $client_id);
			}
			catch(Exception $e)
			{
				$output = PancakeResponse::out(FALSE, $e->getMessage());
			}
			$this->template->content = $output;
		}
		else
		{
			$this->template->content = $encoded_output;
		}
	}

	public function action_add_hardware()
	{
		$hardware_id = Arr::get($_POST, 'hardwareid', 0);
		$profile_id = Arr::get($_POST, 'profileid', 0);
		$client_id = Arr::get($_POST, 'client_id', NULL);
		
		$output = $this->_add_hardware($hardware_id, $profile_id, $client_id);

		$this->template->content = $output;
	}

	public function action_list_all()
	{
		$client_id = Arr::get($_REQUEST, 'client_id', NULL);

		try
		{
			$results = WaffleProfile::list_all($client_id);
			$output = PancakeResponse::out(TRUE, null, $results);
		}
		catch (Exception $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}
		$this->template->content = $output;
	}

	public function action_list_hardware()
	{
		$profile_name = Arr::get($_POST, 'profile_name', 0);

		try
		{
			$results = WaffleProfile::list_hardware($profile_name);
			$output = PancakeResponse::out(TRUE, null, $results);
		}
		catch (PancakeException $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}

		$this->template->content = $output;
	}

}