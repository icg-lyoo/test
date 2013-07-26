<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Greyhound_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('Greyhound, hello!');
	}
}