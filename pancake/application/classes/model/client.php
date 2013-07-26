<?php

defined('SYSPATH') or die('No direct access allowed.');

class Model_Client extends ORM
{

        // Relationships
        protected $_has_many = array('users' => array('through' => 'clients_users'));

        public function rules()
        {
                return array(
                    'system_name' => array(
                        array('not_empty'),
                        array('min_length', array(':value', 2)),
                        array('max_length', array(':value', 7)),
                    ),
                    'consumer_key' => array(
                        array('not_empty'),
                    ),
                    'salt' =>array(
                      array('not_empty'),  
                    ),
                    'json_url' => array(
                        array('url'),
                        array('not_empty'),
                    ),
                    'db_user' => array(
                        array('not_empty'),
                    ),
                    'db_password' => array(
                        array('not_empty'),
                    ),
                    'home_url' => array(
                        array('not_empty'),
                    ),
                );
        }

}