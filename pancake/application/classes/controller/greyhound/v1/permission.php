<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Greyhound_v1_Permission extends Controller_Templates_APIv1
{
	public function action_list()
	{
		$permissions = DB::select('*')
					->from('roles')
					->execute($this->user['database'])
					->as_array();

		$output = PancakeResponse::out(TRUE, null, $permissions);
		
		$this->template->content = $output;
	}
}