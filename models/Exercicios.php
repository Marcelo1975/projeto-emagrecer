<?php
class Exercicios extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function listarExerc($ex=0) {

		$sql = "SELECT * FROM exercicios ORDER BY RAND() ";
		if($ex > 0){
			$sql .= "LIMIT ".$ex;
		}
		$sql = $this->db->query($sql);
		$argv = array();

		if($sql->rowCount() > 0) {
			$argv = $sql->fetchAll();
		}

		return $argv;
	}

	public function verExercicio($id) {
		$array = array();

		$sql = "SELECT * FROM exercicios WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}
}