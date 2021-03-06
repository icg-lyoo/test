<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Icg_Controller extends Controller
{

	var $session_id = NULL;

	public function before()
	{
		$this->session_id = Cookie::get('session_id');
		$current_controller = $this->request->directory() . '/' . $this->request->controller();

		if ($current_controller != 'index')
		{
			if (!$this->session_id)
			{
				Request::initial()->redirect('icg/login');
			}
		}
	}

	protected function _pancake_call($client, $url, $data = array())
	{
		if ($this->session_id)
		{
			$data['session_id'] = $this->session_id;
		}
		$data['consumer_key'] = md5($client);
		$base_url = PANCAKE_URL . '/' . $client . '/v1/';
		$url = $base_url . $url;
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_POST, true);
		curl_setopt($c, CURLOPT_POSTFIELDS, $data);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($c);
		curl_close($c);
		return $result;
	}

	protected function _auth_call($action, $data = array())
	{
		if ($this->session_id)
			$data['session_id'] = $this->session_id;
		$base_url = 'http://' . $_SERVER['HTTP_HOST'] . '/pancake/login/';
		$url = $base_url . $action;
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_POST, true);
		curl_setopt($c, CURLOPT_POSTFIELDS, $data);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($c);
		curl_close($c);
		return $result;
	}

	protected function _waffle_call($url, $data = array())
	{
		$host = PANCAKE_URL;
		$data['consumer_key'] = md5('patriots');
		$data['salt'] = md5('patriots');
		$data['auth_ts'] = time();
		$data['signature'] = $this->generate_signature($data['consumer_key'], $data['salt'], $data['auth_ts']);
		$base_url = 'http://' . $host . '/waffle/v1/';
		$url = $base_url . $url;
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_POST, true);
		curl_setopt($c, CURLOPT_POSTFIELDS, $data);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($c);
		curl_close($c);
		return $result;
	}

	protected function generate_signature($consumer_key, $salt, $timestamp)
	{
		$first = md5($consumer_key . $salt);
		$final = sha1($timestamp . $first);

		return $final;
	}

}