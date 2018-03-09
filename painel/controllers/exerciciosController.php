<?php
class exerciciosController extends Controller{

	public function index() {
		$dados = array();

		$e = new Exercicios();
			
		$e->addExercicios();

		$this->loadTemplate('exercicios', $dados);
	}
}