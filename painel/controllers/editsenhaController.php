<?php
class editsenhaController extends Controller{

	public function index(){
		$dados = array('worning' => '');
		$u = new Usuarios();

		if(isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);
			$senha1 = addslashes($_POST['senha1']);

			if($senha != $senha1){
				$dados['worning'] = "As senha não conferem!";
			}else{
				$u->editSenha($nome, $email, $senha);
			}

			header("Location: ".BASE_URL."home");
		}
		$this->loadTemplate('editsenha', $dados);
	}
}