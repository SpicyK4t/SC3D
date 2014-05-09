<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Usuario extends Controller_Template {

	public $template = 'base';

	public function action_index() {

	}

	public function action_nuevo() {
		$tipos_usuario = array('Alumno', 'Docente', 'Empresa');
	}

	public function action_editar() {

	}

	public function action_borrar() {

	}

	public function action_post() {

	}
}