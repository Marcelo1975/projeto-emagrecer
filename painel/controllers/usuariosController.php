<?php
class usuariosController extends Controller{

	public function index() {
		$data = array();


		$this->loadTemplate('home', $data);
	}
}