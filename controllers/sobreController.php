<?php 
class sobreController extends Controller {

	public function index() {
		$array = array();

		$this->loadTemplate("sobre", $array);
	}
}