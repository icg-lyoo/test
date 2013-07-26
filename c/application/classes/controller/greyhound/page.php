<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Greyhound_Page extends Controller_Greyhound_Admin
{

	public function action_home()
	{
		$this->template->title = __('Greyhound Schedule Page');

		$this->template->content = View::factory('greyhound/page/home');
	}

	public function action_upload()
	{
		$this->template->title = __('Greyhound Upload Page');
		$this->template->content = View::factory('greyhound/page/upload');
	}

	public function action_contact()
	{
		$this->template->title = __('Contact Information');

		$this->template->content = View::factory('greyhound/page/contact');
	}
}