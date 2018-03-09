<?php
class Depoimentos extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function add($name, $texto){

		$sql = "INSERT INTO depoimentos (name_depo, depoi) VALUES ('$name', '$texto')";
        $this->db->query($sql);
	}

	public function getDepoimentos($p=0){

		$sql = "SELECT * FROM depoimentos ORDER BY RAND() ";
		if($p > 0){
			$sql .= "LIMIT ".$p;
		}
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}
		return $array;
	}
}