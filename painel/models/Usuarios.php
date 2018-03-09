<?php
class Usuarios extends Model{

	private $info;

	public function fazerLogin($nome, $senha) {
		
		$sql = "SELECT * FROM usuarios WHERE nome = :nome AND senha = :senha";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		}else {
			return false;
		}
	}

	public function cadastrarUsuario($nome, $email, $senha){

		$sql = "INSERT INTO usuarios (nome, email, senha ) VALUES (:nome, :email, :senha)";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();
	}

	public function getId($nome) {
		$id = 0;

		$sql = "SELECT id FROM usuarios WHERE nome = '$nome'";
		$sql = $this->db->query($sql);
		if($sql->rowCount() > 0) {
			$sql = $sql->fetch();
			$id = $sql['id'];
		}

		return $id;
	}

	public function getUser($id) {

		$sql = "SELECT nome FROM usuarios WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$sql = $sql->fetchAll();

		}

		return $sql;
	}

	public function editSenha($nome, $email, $senha){

		$this->db->query("UPDATE usuarios SET nome = '$nome', email = '$email', senha = md5('$senha')");
	}

}