<?php
class exerciciosController extends Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$dados = array();

		$ex = new Exercicios();

		$dados['exercicios'] = $ex->listarExerc(6);

		$this->loadTemplate('exercicios', $dados);
	}

	public function abrir($id) {
		$array = array(
			'exers' => array()
		);

		$ver = new Exercicios();

		$array['exers'] = $ver->verExercicio($id);

		$this->loadTemplate('verex', $array);
	}
}