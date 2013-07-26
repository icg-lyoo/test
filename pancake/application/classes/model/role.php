<?php defined('SYSPATH') or die('No direct access');

class Model_Role extends Model_Auth_Role
{
	public function __construct($id = NULL)
	{
		$client = Session::instance()->get('user');
		$this->_db_group = $client['system_name'];
		
		parent::__construct($id);
	}
}