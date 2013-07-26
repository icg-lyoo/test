<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Waffle_v2_Update extends Controller_Templates_APIv1
{
    public function action_detail()
	{
		$timestamp = Arr::get($_REQUEST, 'ts', 0);
		$profile_id = Arr::get($_REQUEST, 'profileid', 0);
		try
		{
			if (!empty($profile_id))
			{
				$update_url = '';
				$output = array();

				if ($profile_id > 0)
				{
					$client = $this->client['system_name'];
					$client_db = $this->client['database'];

					$profile_name = DB::select('name')
						->from('w_profiles')
						->where('id', '=', $profile_id)
						->execute($client_db)
						->get('name');

					if (!empty($profile_name))
					{
						$exec = sprintf('/home/scripts/' . DB_PREFIX . '/%s_update.sh %s %d', $client, $profile_name, $timestamp);
						$result = -1;

						exec($exec, $output, $result);
						file_put_contents('shell_script_log/updatesh-' . $profile_name . '-' . date('mdY') . '.txt', print_r($output, true) . ':command '. $exec .  ' : result ' . print_r($result, true));
						if (!empty($output) && $result == 0)
						{
							$update_url = $output[(count($output) - 1)];
							$update = array(
								'update_url' => 'http://' . $_SERVER['HTTP_HOST'] . '/waffle/v2/update/download?file=' . $update_url,
								'profile_id' => $profile_id,
								'profile_name' => $profile_name
							);
							$output = PancakeResponse::out(TRUE, null, $update);
						}
						else
						{
							$output = PancakeResponse::out(FALSE, Kohana::message('update', 'no_exec_output'));
						}
					}
					else
					{
						$output = PancakeResponse::out(FALSE, Kohana::message('update', 'no_profile_found'));
					}
				}
				else
				{
					$output = PancakeResponse::out(FALSE, Kohana::message('update', 'invalid_profile_id'));
				}
			}
			else
			{
				$output = PancakeResponse::out(FALSE, Kohana::message('update', 'no_profile_id'));
			}
		}
		catch (Exception $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}
		$this->template->content = $output;
	}

	public function action_download()
	{
		$filename = Arr::get($_REQUEST, 'file', '');

		if (!empty($filename))
		{
			$client = $this->client['system_name'];
			$matches = array();

            preg_match('~^(?P<profile>.+)\_[0-9]{8}\_[0-9]{6}.+$~i', $filename, $matches);

			if (count($matches['profile']) > 0)
			{
				$profile = $matches['profile'];

				$full_path = sprintf('/home/template_archives/' . DB_PREFIX . '/%s/%s/%s', $client, $profile, $filename);
				if (file_exists($full_path))
				{
					$this->response->send_file($full_path);
				}
				else
				{
					//file doesnt exist throws 500 error in waffle
				}
			}
		}

		header('HTTP/1.0 404 Not Found');
	}

}