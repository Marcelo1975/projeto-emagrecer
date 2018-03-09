<?php
class Historias extends Model{

	public function getFotos($q=0) {
		$array = array();

		$sql = "SELECT * FROM historia ORDER BY RAND() ";
		if($q > 0){
			$sql .= "LIMIT ".$q;
		}
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	
}