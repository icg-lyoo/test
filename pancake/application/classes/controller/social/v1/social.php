<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Social_v1_Social extends Controller
{

	public function action_index()
	{
		echo 'asdf';
	}

	public function action_all()
	{
		$client_name = $this->request->param('client');
		$limit = Arr::get($_REQUEST, 'limit', 10);
		$timestamp = Arr::get($_REQUEST, 'timestamp', 0);
		
		$social = new ICSocial($client_name);
		$results = $social->feed(ICSocial::SERVICE_ALL, $timestamp, $limit);

		$this->response->body(AppResponse::out($results));
	}

	public function action_facebook()
	{
		$client_name = $this->request->param('client');
		$limit = Arr::get($_REQUEST, 'limit', 10);
		$timestamp = Arr::get($_REQUEST, 'timestamp', 0);

		$social = new ICSocial($client_name);
		
		$results = $social->feed(ICSocial::SERVICE_FACEBOOK, $timestamp, $limit);

		$this->response->body(AppResponse::out($results));
	}

	public function action_twitter()
	{
		$client_name = $this->request->param('client');
		$limit = Arr::get($_REQUEST, 'limit', 10);
		$timestamp = Arr::get($_REQUEST, 'timestamp', 0);

		$social = new ICSocial($client_name);

		$results = $social->feed(ICSocial::SERVICE_TWITTER, $timestamp, $limit);

		$this->response->body(AppResponse::out($results));
	}

	public function action_flickr()
	{
		$client_name = $this->request->param('client');
		$limit = Arr::get($_REQUEST, 'limit', 10);
		$timestamp = Arr::get($_REQUEST, 'timestamp', 0);

		$social = new ICSocial($client_name);

		$results = $social->feed(ICSocial::SERVICE_FLICKR, $timestamp, $limit);

		$this->response->body(AppResponse::out($results));
	}

	public function action_foursquare()
	{
		$client_name = $this->request->param('client');
		$limit = Arr::get($_REQUEST, 'limit', 10);
		$timestamp = Arr::get($_REQUEST, 'timestamp', 0);

		$social = new ICSocial($client_name);

		$results = $social->feed(ICSocial::SERVICE_FOURSQUARE, $timestamp, $limit);

		$this->response->body(AppResponse::out($results));
	}

	public function action_update()
	{
		if(true)//PHP_SAPI === 'cli')
		{
			$client_name = $this->request->param('client');
			$social = new ICSocial($client_name);
			$social->update_services();
		}
		else
		{
			$this->response->body('No direct access allowed to update.');
		}
	}
}