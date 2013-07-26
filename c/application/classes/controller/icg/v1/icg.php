<?php

defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Kohana Controller controller_icgtemplate_v1_icg
 * 
 * Created Dec 5, 2012 1:56:47 PM
 * @author equemuel
 */
class Controller_ICG_v1_ICG extends Controller
{

    protected $login_page = 'login/index';
    protected $_is_ajax = FALSE;
    protected $_auth_required = TRUE;
    protected $session_id;

    public function before()
    {

        $this->session_id = Cookie::get('session_id',null);

        if ($this->_auth_required)
        {
            $result = $this->_pancake_call('auth', 'user', 'is_admin',array(),1,1);

            if ($result['meta']['status'] == 1)
            {
                $this->admin = true;
            }
            else
            {
                $this->admin = false;
            }

            $url = implode('/', array($this->request->controller(), $this->request->action()));
         
            if ($url != $this->login_page && !$this->session_id)
            {
                if ($this->_is_ajax)
                {
                    echo "You are not authorized to see this page.";
                }
                else
                {
                     $this->request->redirect($this->login_page);
                }
            }
            elseif($this->session_id && $url == $this->login_page)
            {
                    $result = $this->_pancake_call('auth', 'client', 'get_home_url', array(), 1,1);
                    $home_url = ($result['meta']['status'] == TRUE) ? $result['data']['home_url'] : '';

                   
                    $this->request->redirect($home_url);
                    
            }
        }
    }

    protected function _pancake_login($username, $password, $remember)
    {
        $data['username'] = $username;
        $data['password'] = $password;
        $data['remember'] = $remember;

        if ($remember)
            Cookie::$expiration = Date::MONTH;

        $result = $this->_pancake_call('auth', 'user', 'login', $data, 1,1);

        if ($result['meta']['status'] == 1)
        {
            // Cookie::$httponly = true;
            Cookie::set('session_id', $result['data']['session_id']);
            unset($result['data']['session_id']);
        }

        return json_encode($result);    
    }

    protected function _pancake_call($application, $controller, $action, $data = array(), $version = 1, $json_decode = FALSE)
    {
        $version = 'v' . $version;
        $url_parts = array(PANCAKE_URL, $application, $version, $controller, $action);
        $url = implode('/', $url_parts);

        if ($this->session_id)
            $data['session_id'] = $this->session_id;
        $request = Request::factory($url)
            ->method(Request::POST)
            ->post($data)
            ->execute();
        $result = $request->body();
        if ($json_decode)
            return $this->_decode_pancake($result);
        else
            return $result;
    }

    //Decodes pancake responses
    //returns an array:
    //array[0] is the status
    //array[1] is the error message or the data returned by pancake, depending on the result
    protected function _decode_pancake($pancake_result)
    {
        try
        {
            $decoded_result = json_decode($pancake_result, TRUE);
            if (!$decoded_result)
            {
                return "There was an error decoding the json string: " . $pancake_result;
            }
            else
            {
                return $decoded_result;
            }
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }
    
    protected function _pancake_send_file($files, $endpoint = 'copy')
	{

		$fields = array();

		for ($i = 0; $i < count($files); $i++)
		{
			$file = $files[$i];
			if (!isset($file['file']) || !isset($file['path']))
			{
				continue;
			}
			elseif (!isset($file['type']))
			{
				$file['type'] = 'image/jpg'; //defaults to image jpeg if none is defined
			}
			$fields['files[' . $i . ']'] = '@' . $file['file'] . ';type=' . $file['type'];
			$fields['targets[' . $i . ']'] = $file['path'];
		}

		$host = 'pancake.icgclients.com';
		$data['consumer_key'] = md5('rtable');
		$data['salt'] = md5('rtable');
		$data['auth_ts'] = time();
		$data['signature'] = $this->generate_signature($data['consumer_key'], $data['salt'], $data['auth_ts']);

		$base_url = 'http://' . $host . '/internal/v1/rtable/' . $endpoint . '/';
		$url = $base_url;
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_POST, true);
		curl_setopt($c, CURLOPT_POSTFIELDS, $data);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($c, CURLOPT_POSTFIELDS, $fields);

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