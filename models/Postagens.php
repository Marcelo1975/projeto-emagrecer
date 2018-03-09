<?php
class Postagens extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function listar($qt = 0) {

		$sql = "SELECT * FROM postagens ORDER BY RAND() ";
		if($qt > 0) {
			$sql .= "LIMIT ".$qt;
		}
		$sql = $this->db->query($sql);
		$argv = array();

		if($sql->rowCount() > 0) {
			$argv = $sql->fetchAll();
		}

		return $argv;
	}

	public function postLer($id) {
		$pos = array();

		$sql = "SELECT * FROM postagens WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$pos = $sql->fetchAll();
		}

		return $pos;
	}
}