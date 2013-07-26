<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Pancake Controller clients
 * 
 * Created Nov 14, 2012 10:14:32 AM
 * @author equemuel
 */
class Controller_Social_v1_Clients extends Controller
{

	public function action_all()
	{
		$status = FALSE;
		$message = NULL;
		$data = array();
		try
		{
			$results = DB::select('*')
				->from('clients')
				->execute('social')
				->as_array();

			if ($results)
			{
				$status = TRUE;
				$data = $results;
			}
			else
			{
				$message = "No clients found.";
			}
		}
		catch (Exception $e)
		{
			$message = $e->getMessage();
		}

		$output = PancakeResponse::out($status, $message, $data);
		$this->response->body($output);
	}
	
	public function action_get()
	{
		$client_id = Arr::get($_REQUEST, 'client_id', NULL);
		$status = FALSE;
		$message = NULL;
		$data = array();
		try
		{
			$results = DB::select('*')
				->from('clients')
				->where('id', '=', $client_id)
				->execute('social')
				->as_array();

			if ($results)
			{
				$status = TRUE;
				$data = $results[0];
			}
			else
			{
				$message = "No clients found.";
			}
		}
		catch (Exception $e)
		{
			$message = $e->getMessage();
		}

		$output = PancakeResponse::out($status, $message, $data);
		$this->response->body($output);
	}

}