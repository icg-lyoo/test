<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Greyhound_Admin extends Controller_Icg_v1_Template
{

	public $template = 'greyhound/admin/template';
	protected $login_page = 'icg/login';
	
	public function before()
	{
		parent::before();

		if ($this->auto_render)
		{
			$this->template = View::factory($this->template);
			// Initialize empty values
			$this->template->title = '';
			$this->template->content = '';

			$this->template->styles = array();
			$this->template->scripts = array();
		}
	}

	public function after()
	{
		if ($this->auto_render)
		{
			$styles = array(
				'css/greyhound/bootstrap.css' => 'screen',
				'css/greyhound/style.css' => 'screen',
				'css/greyhound/dataTables.css' => 'screen',
			);

			$scripts = array(
				'js/greyhound/jquery-1.7.2.js',
				'js/greyhound/jquery.jeditable.js',
				'js/greyhound/jquery.jeditable.checkbox.js',
				'js/greyhound/jquery.dataTables.js',
				'js/greyhound/dataTables.fnReloadAjax.js',
				'js/greyhound/bootstrap-alert.js',
			);

			$this->template->styles = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge($this->template->scripts, $scripts);
		}

		parent::after();
	}

}

