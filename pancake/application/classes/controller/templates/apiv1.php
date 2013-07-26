<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Templates_APIv1 extends Controller_Template
{

    public $template = 'api/v1/base';
    protected $user;
    protected $clients;
    protected $_auth_required;
    protected $_type = PancakeResponse::TYPE_JSON;
    private $_one_time_auth = NULL;

    public function before()
    {
        parent::before();
        $this->_auth_required = (isset($this->_auth_required)) ? $this->_auth_required : TRUE;
        $this->_type = Arr::get($_REQUEST, 'type', PancakeResponse::TYPE_JSON);
        if ($this->_auth_required)
        {
            $session_id = Arr::get($_REQUEST, 'session_id', NULL);
            $session = Session::instance('database', $session_id);
            
            $authenticated = FALSE;
            $user = Auth::instance($session);
            if ($user->logged_in())
            {
                $authenticated = TRUE;
                $this->user = $user;
                $user_id = $this->user->get_user()->id;
                $parts = explode('/', $this->request->directory());
                $system_name = $parts[0];
                $clients = DB::select('id', 'system_name')
                    ->from('clients')
                    ->execute()
                    ->as_array();
                $this->client['system_name'] = $system_name;
                $this->client['database'] = FALSE;
                foreach($clients as $client)
                {
                    if($client['system_name'] == $system_name)
                    {
                        $this->client['database'] = PancakeClient::database_instance($client['id']);
                    }
                }
            }
            else
            {
                $this->_one_time_auth = $session->id();
                $consumer_key = Arr::get($_REQUEST, 'consumer_key', '');
                $salt = Arr::get($_REQUEST, 'salt', '');
                $timestamp = Arr::get($_REQUEST, 'auth_ts', time());
                $signature = Arr::get($_REQUEST, 'signature', PancakeAuth::generate_signature($consumer_key, $salt, $timestamp));
                try
                {
                    $user_id = PancakeAuth::verify($consumer_key, $timestamp, $signature);
                    if (!$user_id)
                    {
                        header('HTTP/1.1 401 Unauthorized');
                        throw new HTTP_Exception_401();
                        exit;
                    }
                    $client_result = DB::select('id', 'system_name')
                        ->from('clients')
                        ->where('consumer_key', '=', $consumer_key)
                        ->execute()
                        ->as_array();
                    $this->client['system_name'] = $client_result[0]['system_name'];
                    $this->client['database'] = PancakeClient::database_instance($client_result[0]['id']);
                }
                catch (Exception $e)
                {
                    header('HTTP/1.1 401 Unauthorized');
                    throw new HTTP_Exception_401($e->getMessage());
                    exit;
                }
            }
            $session->set('client', $this->client);
//            $session->set('clients', PancakeClient::get_clients($user_id));
//            if (count($session->get('clients')) == 1)
//            {
//                $session->set('clients', $this->clients[0]);
//            }
//            $session->write();
        }       
        
    }

    public function is_valid_email($email)
    {
        $isValid = true;
        $atIndex = strrpos($email, "@");
        if (is_bool($atIndex) && !$atIndex)
        {
            $isValid = false;
        }
        else
        {
            $domain = substr($email, $atIndex + 1);
            $local = substr($email, 0, $atIndex);
            $localLen = strlen($local);
            $domainLen = strlen($domain);
            if ($localLen < 1 || $localLen > 64)
            {
                // local part length exceeded
                $isValid = false;
            }
            else if ($domainLen < 1 || $domainLen > 255)
            {
                // domain part length exceeded
                $isValid = false;
            }
            else if ($local[0] == '.' || $local[$localLen - 1] == '.')
            {
                // local part starts or ends with '.'
                $isValid = false;
            }
            else if (preg_match('/\\.\\./', $local))
            {
                // local part has two consecutive dots
                $isValid = false;
            }
            else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
            {
                // character not valid in domain part
                $isValid = false;
            }
            else if (preg_match('/\\.\\./', $domain))
            {
                // domain part has two consecutive dots
                $isValid = false;
            }
            else if
            (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", "", $local)))
            {
                // character not valid in local part unless 
                // local part is quoted
                if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", "", $local)))
                {
                    $isValid = false;
                }
            }
            if ($isValid && !(checkdnsrr($domain, "MX") ||
                checkdnsrr($domain, "A")))
            {
                // domain not found in DNS
                $isValid = false;
            }
        }
        return $isValid;
    }

    public function after()
    {
        $this->response->headers('Content-type', $this->_type);
        if($this->_one_time_auth) PancakeSession::destroy($this->_one_time_auth);
        parent::after();
    }

}