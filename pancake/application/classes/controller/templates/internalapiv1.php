<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This internal api controller template basically restricts access to the controllers that extend this template to specific IP addresses/ranges.
 */
class Controller_Templates_InternalAPIv1 extends Controller_Template
{
	public $template = 'api/v1/base';
	protected $_type = PancakeResponse::TYPE_JSON;

	protected $_allowed_ip = array();

	public function before()
	{
		parent::before();

		// Put logic here
		if(!empty($this->_allowed_ip) && !in_array($_SERVER['REMOTE_ADDR'], $this->_allowed_ip))
		{
			throw new HTTP_Exception_401(Kohana::message('internal', 'ip_not_allowed'));
		}
	}

	public function after()
	{
		$this->response->headers('Content-type', $this->_type);
		parent::after();
	}
}