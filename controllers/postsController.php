<?php 
class postsController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$dados = array();

		$this->loadTemplate('posts', $dados);
	}

	public function ler($id) {
		$array = array();

		$post = new Postagens();

		$array['postler'] = $post->postLer($id);

		$this->loadTemplate("posts", $array);
	}
}