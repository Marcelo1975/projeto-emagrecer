<?php
class depoimentosController extends Controller {

	public function index() {
		$data = array();

		if(isset($_POST['name']) && !empty($_POST['name'])) {
    		$name = addslashes($_POST['name']);
    		$texto = addslashes($_POST['texto']);

	    	$d = new Depoimentos();

	    	$d->add($name, $texto);

	    	header("Location: ".BASE_URL."home");
	    }

		$this->loadTemplate('depoimentos', $data);
	}
}