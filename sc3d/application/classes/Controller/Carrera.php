<?php defined('SYSPATH') or die('No direct script access.'); 

class Controller_Carrera extends Controller_Template {
	
	public $template = 'base';

	public function action_index() {
		$carreras = ORM::factory('Carrera')->find_all();
		$vista = new View('carrera/index');
		$vista->set('carreras', $carreras);
		$this->template->set('contenido', $vista);
	}

	public function action_nueva() {
		$carrera = new Model_Carrera();
		$vista = new View('carrera/editar');
		$vista->set('carrera', $carrera);
		$this->template->set('contenido', $vista);
	}

	public function action_editar() {
		$carrera_id = $this->request->param('id');
		$carrera = new Model_Carrera($carrera_id);
		$vista = new View('carrera/editar');
		$vista->set('carrera', $carrera);
		$this->template->set('contenido', $vista);
	}

	public function action_borrar() {
		$carrera_id = $this->request->param('id');
		$carrera = new Model_Carrera($carrera_id);
		$carrera->delete(); // borrado de BD remplazar con borrado lógico
		HTTP::redirect('/carrera/');
	}

	public function action_post() {
		$carrera_id = $this->request->param('id');
		$carrera = new Model_Carrera($carrera_id);
		$carrera->values($_POST);
		$errores = array();
		try {
			$carrera->save();
			HTTP::redirect('/carrera/');
		}
		catch(ORM_Validation_Exception $ex) {
			$errores = $ex->errors('validation');
		}
		$vista = new View('carrera/editar');
		$vista->set('carrera', $carrera);
		$this->template->set('contenido', $vista);
	}
}