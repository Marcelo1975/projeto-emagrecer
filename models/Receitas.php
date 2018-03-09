<?php
class Receitas extends Model{

	public function getReceitas($q=0){
		$data = array();

		$sql = "SELECT * FROM receitas ORDER BY RAND() ";
		if($q > 0) {
			$sql .= "LIMIT ".$q;
		}
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
		}

		return $data;
	}

	public function listarReceita($id){
		$array = array();

		$sql = "SELECT * FROM receitas WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}
}