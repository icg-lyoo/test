<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Waffle_v1_Profile extends Controller_Templates_APIv1
{
	public function action_add()
	{
		//$profile_name = Arr::get($_POST, 'profile', '');
		try
		{
			array_map('trim', $_POST);
			$profile = ORM::factory('waffleprofile');
			$profile->values($_POST);

			$profile->save();

			if($profile->loaded())
			{
				$output = PancakeResponse::out(TRUE, null, array('id' => $profile->id));
			}
			else
			{
				$output = PancakeResponse::out(FALSE, Kohana::message('waffle/profile', 'failed_insert'));
			}
		}
		catch(ORM_Validation_Exception $e)
		{
			$errors = $e->errors('model');

			$output = PancakeResponse::out(FALSE, implode("\n", $errors));
		}

		$this->template->content = $output;
	}

	public function action_add_hardware()
	{
		$hardware_id = Arr::get($_POST, 'hardwareid', 0);
		$profile_id = Arr::get($_POST, 'profileid', 0);

		try
		{
			WaffleHardware::add_profiles($hardware_id, $profile_id);
			$output = PancakeResponse::out(TRUE);
		}
		catch(PancakeException $e)
		{
			$output = PancakeResponse::output(FALSE, $e->getMessage());
		}

		$this->template->content = $output;
	}

	public function action_list_hardware()
	{
		$profile_id = Arr::get($_POST, 'profileid', 0);

		try
		{
			$results = WaffleProfile::list_hardware($profile_id);
			$output = PancakeResponse::out(TRUE, null, $results);
		}
		catch(PancakeException $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}

		$this->template->content = $output;
	}
}