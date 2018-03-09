<?php
class homeController extends Controller {

	public function __construct(){
		parent::__construct();
	}

    public function index() {
        $data = array();
        $p = new Postagens();

		$data['posts'] = $p->listar(3);

		$h = new Historias();

		$data['historias'] = $h->getFotos(8);

		$d = new Depoimentos();

		$data['depoimentos'] = $d->getDepoimentos(3);

        $this->loadTemplate('home', $data);
    }
}