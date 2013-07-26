<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author equemuel
 */
class Controller_Patriots_Ajax_Waffle extends Controller_ICG_v1_ICG
{
    protected $_is_ajax = TRUE;

	public function action_get_auth_code()
	{

		$name = Arr::get($_REQUEST, 'data');

		$result = $this->_pancake_call('waffle', 'profile','list_hardware', array('profile_name' => $name), 2);

		$decoded = json_decode($result);
		if (!$decoded)
		{
			echo json_encode(false);
		}
		else
		{
			$auth_code = $decoded->data[0]->code;
			echo($auth_code);
		}
	}

	public function action_add_hardware_profile()
	{

		$response = array();
		$response_json = '';

		$name = Arr::get($_REQUEST, 'name');

		//add hardware
		$hardware_response = $this->add_hardware($name);
		$decoded_hardware_response = json_decode($hardware_response);

		//add profile
		$profile_response = $this->add_profile($name);
		$decoded_profile_response = json_decode($profile_response);

		//get hardware and profile and associate them
		//get hardware and profile ids from the return



		if ($decoded_hardware_response->meta->status == 1)
		{
			$hardware_id = $decoded_hardware_response->data->id;
		}


		if ($decoded_profile_response)
		{
			$profile_id = $decoded_profile_response->data[0];
		}

		if (isset($hardware_id) && isset($profile_id))
		{
			$hp_association_response = $this->add_profile_to_hardware_association($profile_id, $hardware_id);
			$decoded_hp_association_response = json_decode($hp_association_response);
		}
		else
		{
			$decoded_hp_association_response = '';
		}

		$response['hardware'] = $decoded_hardware_response;
		$response['profile'] = $decoded_profile_response;
		$response['association'] = $decoded_hp_association_response;

		$response_json = json_encode($response);

		echo $response_json;
	}

	private function add_hardware($stand_name)
	{

		return $this->_pancake_call('waffle', 'hardware', 'add', array('name' => $stand_name), 2);
	}

	private function add_profile($stand_name)
	{

		return $this->_pancake_call('waffle', 'profile', 'add', array('name' => $stand_name,
				'extract_path' => 'C:\\inetpub\\wwwroot\\deploy-patriots',
				'launch' => 'C:\\Program Files\\ICMedia CampaignManager 2010\\Ryarc CM Player\\RyarcClient.exe',
				'update_interval' => 3600,
				'auto_launch' => 1,
				'tz_offset' => -8,
				'push_url' => '108.167.186.23:9933',
				'push_zone' => 'MMS',
				'push_room' => 'pats',
			), 2);
	}

	private function add_profile_to_hardware_association($profile_id, $hardware_id)
	{

		return $this->_pancake_call('waffle','hardware/add_profiles', array(
				'hardwareid' => $hardware_id,
				'profileid' => $profile_id,
			), 2);
	}

	//Variable: name "name of new hardware"
	public function action_add_hardware()
	{
		$name = Arr::get($_REQUEST, 'name');


		echo $this->_pancake_call('waffle','hardware', 'add', array('name' => $name), 2);
	}

	public function action_add_profile()
	{
		$name = Arr::get($_REQUEST, 'name');

		echo $this->_pancake_call('waffle', 'profile', 'add', array('name' => $name,
			'extract_path' => 'C:\\inetpub\\wwwroot\\deploy-patriots',
			'launch' => 'C:\\Program Files\\ICMedia CampaignManager 2010\\Ryarc CM Player\\RyarcClient.exe',
			'update_interval' => 3600,
			'auto_launch' => 1,
			'tz_offset' => -8,
			'push_url' => '108.167.186.23:9933',
			'push_zone' => 'MMS',
			'push_room' => 'pats',
		), 2);
	}

	public function action_add_profile_to_hardware()
	{
		$hardwareid = Arr::get($_REQUEST, 'hardwareid');

		$profileid = Arr::get($_REQUEST, 'profileid');

		echo $this->_pancake_call('waffle', 'hardware', 'add_profiles', array(
			'hardwareid' => $hardwareid,
			'profileid' => $profileid,
		), 2);
	}

	public function action_push_all()
	{
		$encoded_result = $this->_pancake_call('waffle', 'push', 'all_by_client_id', array(
            'client_id' => 3,
        ), 2, FALSE);
        echo $encoded_result;
	}
	
	public function action_push_profile()
	{

		$profile_name = Arr::get($_REQUEST, 'name');

		echo $this->_pancake_call('waffle', 'push', 'profile', array(
			'profile' => $profile_name,
		), 2);
	}

}