<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Greyhound_v1_Promo extends Controller_Templates_APIv1
{
	/**
	 * https://icgmanager.atlassian.net/wiki/x/CYA6
	 */
	public function action_list()
	{
		$status = Arr::get($_POST, 'status', null);

		$promos = GreyhoundPromo::get($status);

		$output = PancakeResponse::out(TRUE, null, $promos);

		$this->template->content = $output;
	}

	/**
	 * https://icgmanager.atlassian.net/wiki/x/B4A6
	 */
	public function action_add()
	{
		$asset = Arr::get($_POST, 'asset', '');
		$order = Arr::get($_POST, 'order', 0);
		$status = Arr::get($_POST, 'status', 0);

		if(!empty($asset))
		{
			try
			{
				$promo_id = GreyhoundPromo::add($asset, $order, $status);
				$output = PancakeResponse::out(TRUE, null, array('id' => $promo_id));
			}
			catch(Exception $e)
			{
				$output = PancakeResponse::out(FALSE, $e->getMessage());
			}
		}
		else
		{
			$output = PancakeResponse::out(FALSE, Kohana::message('promo', 'asset_empty'));
		}

		$this->template->content = $output;
	}

	/**
	 * https://icgmanager.atlassian.net/wiki/x/DIA6
	 */
	public function action_update()
	{
		$promo_id = Arr::get($_POST, 'promoid', 0);
		$asset = Arr::get($_POST, 'asset', '');
		$order = Arr::get($_POST, 'order', null);
		$status = Arr::get($_POST, 'status', null);

		if($promo_id > 0)
		{
			try
			{
				$result = GreyhoundPromo::update($promo_id, $asset, $status, $order);
				$output = PancakeResponse::out($result);
			}
			catch(Exception $e)
			{
				$output = PancakeResponse::out(FALSE, $e->getMessage());
			}

		}
		else
		{
			$output = PancakeResponse::out(FALSE, Kohana::message('greyhound', 'invalid_promo_id'));
		}

		$this->template->content = $output;
	}
}