<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Waffle_v1_Hardware extends Controller_Templates_APIv1
{
	private $_no_auth_action = array(
		'authorize',
		'list_all',
		'add'
	);

	public function before()
	{
		// No authentication is required to access the following calls
		if(in_array($this->request->action(), $this->_no_auth_action))
		{
			$this->_auth_required = FALSE;
		}

		parent::before();
	}

	public function action_add()
	{
		$name = Arr::get($_POST, 'name', '');
		$client_id = Arr::get($_REQUEST, 'client_id', NULL);
		try
		{
			$data = WaffleHardware::add($name, $client_id);
			$output = PancakeResponse::out(TRUE, '', $data);
		}
		catch(PancakeException $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}

		$this->template->content = $output;
	}

	public function action_authorize()
	{
		$code = Arr::get($_POST, 'code', '');

		try
		{
			$result = WaffleHardware::authorize($code);

			$output = PancakeResponse::out(TRUE, null, $result);
		}
		catch(PancakeException $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}
		catch(Exception $e)
		{
			echo $e;
		}

		$this->template->content = $output;
	}

	public function action_add_profiles()
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
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}

		$this->template->content = $output;
	}

	/**
	 *
	 */
	public function action_get_profiles()
	{
		$hardware_id = Arr::get($_REQUEST, 'hardware_id', 0);
		if(empty($hardware_id))
		{
			$hardware_id = Arr::get($_REQUEST, 'hardwareid', 9);
		}

		$output = '';
                    
		try
		{
			$result = WaffleHardware::get_profiles($hardware_id);
			$output = PancakeResponse::out(TRUE, null, $result);
		}
		catch(Exception $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}

		$this->template->content = $output;
	}

	/**
	 * Alias for get_profiles
	 */
	public function action_list_profiles()
	{
		$this->action_get_profiles();
	}
	
	public function action_list_all()
	{
		$client_id = Arr::get($_REQUEST, 'client_id', NULL);
		$status = FALSE;
		$data = array();
		if($client_id)
		{
			$data = WaffleHardware::list_all_hardware($client_id);
			$message = "successfully retrieved hardware";
			$status = TRUE;
		}
		else
		{
			$message = "No client specified";
		}
		$output = PancakeResponse::out($status, $message, $data);
		$this->template->content = $output;
	}
}