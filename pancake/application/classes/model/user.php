<?php defined('SYSPATH') or die('No direct access');

class Model_User extends Model_Auth_User
{
        protected $_has_many = array(
            'user_tokens' => array('model' => 'user_token'),
            'roles' => array('model' => 'role', 'through' => 'roles_users'),
            'clients' => array('model' => 'client', 'through' => 'clients_users'),
        );
        
	public function __construct($id = NULL)
	{
		$client = Session::instance()->get('user');
		$this->_db_group = $client['system_name'];

		parent::__construct($id);
	}
}