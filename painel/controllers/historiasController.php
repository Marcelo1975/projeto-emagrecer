<?php
class historiasController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$array = array();

		$data = new Historia();

		$data->addFoto();

		$this->loadTemplate('historia', $array);
	}
}