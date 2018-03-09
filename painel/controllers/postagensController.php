<?php
class postagensController extends Controller{

	public function index() {
		$dados = array();

		$data = new Postagens();

		$data->addPost();

		$dados['posts'] = $data->getPost();

		$this->loadTemplate('postagens', $dados);
	}
}