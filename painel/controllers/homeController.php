<?php
class homeController extends Controller {

    public function index() {
        $data = array();

        $u = new Usuarios();

        $data['usuarios'] = $u->getUser($_SESSION['loginUser']);        

        $this->loadTemplate('home', $data);
    }

}