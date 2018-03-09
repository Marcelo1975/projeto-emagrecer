<?php
class loginController extends Controller {

	public function index() {
		$array = array(
			'aviso' => ''
		);
		if(!empty($_POST['nome'])) {

			$nome = addslashes($_POST['nome']);
			$senha = addslashes($_POST['senha']);

			$usuarios = new Usuarios();

			if($usuarios->fazerLogin($nome, $senha)) {

				$uid = $usuarios->getId($nome);

				$_SESSION['loginUser'] = $usuarios->getId($nome);

				header("Location: home"); 
				exit;
			}else {
				$array['aviso'] = "Nome e/ou senha errados.";
			}

		}

		$this->loadView('login', $array);
	}
}