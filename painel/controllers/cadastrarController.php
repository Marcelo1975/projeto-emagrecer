<?php
class cadastrarController extends Controller{

	public function index() {
		$array = array('alerta'=>'');

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {

			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			$u = new Usuarios();

			$u->cadastrarUsuario($nome, $email, $senha);

			$array['alerta'] = "Error: Usuário Não Cadastrado Tente Novamente.";

			header("Location: ".BASE_URL);
		}

		$this->loadTemplate('cadastrar', $array);
	}
}