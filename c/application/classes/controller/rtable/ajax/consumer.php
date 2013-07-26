<?php defined('SYSPATH') OR die('No direct access allowed.');

 

/**

 * Pancake Controller consumer

 * 

 * Created Oct 12, 2012 9:56:00 AM

 * @author equemuel

 */



class Controller_Rtable_Ajax_Consumer extends Controller_Icg_v1_Icg

{

	public function before()

	{

		if ($this->request->action() != 'login')

			parent::before();

	}

	

	public function action_index()

	{

		echo 'hello';

	}

	

	public function action_login()

	{

		$consumer_email = Arr::get($_POST, 'consumer_email', null);

		$event_code = Arr::get($_POST, 'event_code', null);

		

		$data = array(

			'consumer_email' => $consumer_email,

			'event_code' => $event_code

		);

		$encoded_result =  $this->_pancake_call('rtable', 'consumer','login', $data);

		$result = json_decode($encoded_result, true);

		Cookie::set('session_id', $result['data']['session_id']);

		$session = Session::instance();

		$session->set('event_id', $result['data']['event_id']);

		echo $encoded_result;

	}

}