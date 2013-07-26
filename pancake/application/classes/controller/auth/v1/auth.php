<?php

defined('SYSPATH') or die('No direct access');

class Controller_Auth_v1_Auth extends Controller_Templates_APIv1
{

        protected $_no_auth = array(
            'user/login',
            'user/logout',
            'user/is_logged_in',
        );

        public function before()
        {
                // No authentication is required to access the following calls
                if (in_array(implode('/', array($this->request->controller(), $this->request->action())), $this->_no_auth))
                {
                        $this->_auth_required = FALSE;
                }
                parent::before();
        }

        protected function _random_password()
        {

                $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789./!@#$%^&*()_-+=";
                $pass = array(); //remember to declare $pass as an array
                for ($i = 0; $i < 8; $i++)
                {
                        $n = rand(0, strlen($alphabet) - 1); //use strlen instead of count
                        $pass[$i] = $alphabet[$n];
                }
                return implode($pass); //turn the array into a string
        }

        protected function _check_email_address($email)
        {
                // First, we check that there's one @ symbol, and that the lengths are right
                if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email))
                {
                        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
                        return false;
                }
                // Split it into sections to make life easier
                $email_array = explode("@", $email);
                $local_array = explode(".", $email_array[0]);
                for ($i = 0; $i < sizeof($local_array); $i++)
                {
                        if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i]))
                        {
                                return false;
                        }
                }
                if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1]))
                { // Check if domain is IP. If not, it should be valid domain name
                        $domain_array = explode(".", $email_array[1]);
                        if (sizeof($domain_array) < 2)
                        {
                                return false; // Not enough parts to domain
                        }
                        for ($i = 0; $i < sizeof($domain_array); $i++)
                        {
                                if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i]))
                                {
                                        return false;
                                }
                        }
                }

                return true;
        }

}
