<?php
class receitasController extends Controller{

	public function index() {
		$dados = array();

		$r = new Receitas();

		$dados['receits'] = $r->addReceitas();

		$this->loadTemplate('receitas', $dados);
	}
}