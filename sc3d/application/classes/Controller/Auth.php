<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Auth extends Controller_Template {

	public $template = 'base';

	public function action_login()
	{
		$vista = new View('auth/login');
		$this->template->set("contenido", $vista);
	}

	public function action_logoff()
	{

	}
} 
