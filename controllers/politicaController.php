<?php
class politicaController extends Controller{

	public function index() {
		$dados = array();

		$this->loadTemplate('politica', $dados);
	}
}