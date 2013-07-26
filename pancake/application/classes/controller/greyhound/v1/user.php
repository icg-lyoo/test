<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Greyhound_v1_User extends Controller_Templates_APIv1
{
	public function action_add()
	{
		$username = Arr::get($_POST, 'username', '');
		$password = Arr::get($_POST, 'password', '');
		$email = Arr::get($_POST, 'email', '');
		$permissions = Arr::get($_POST, 'perms', '');

		$user = ORM::factory('user');

		$data = array(
			'username' => $username,
			'password' => $password,
			'password_confirm' => $password,
			'email' => $email,
		);

		try
		{
			$user->values($data);
			$user->create();

			if(!empty($permissions))
			{
				$permissions = explode(',', $permissions);

				foreach($permissions as $perm)
				{
					if(!empty($perm))
					{
						$user->add('roles', $perm);
					}
				}
			}

			$output = PancakeResponse::out(TRUE, null, array('user_id' => $user->id));
		}
		catch(ORM_Validation_Exception $e)
		{
			$output = PancakeResponse::out(FALSE, $e->errors(''));
		}
		catch(Exception $e)
		{
			$output = PancakeResponse::out(FALSE, $e->getMessage());
		}

		$this->template->content = $output;
	}
}