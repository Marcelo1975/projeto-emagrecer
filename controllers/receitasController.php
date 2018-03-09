<?php
class receitasController extends Controller {

	public function index(){
		$array = array();

		$re = new Receitas();

		$array['receitas'] = $re->getReceitas(4);

		$this->loadTemplate('receitas', $array);
	}

	public function list($id){
		$dados = array();

		$r = new Receitas();

		$dados['verreceitas'] = $r->listarReceita($id);

		$this->loadTemplate("list", $dados);
	}
 }