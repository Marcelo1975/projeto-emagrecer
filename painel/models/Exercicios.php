<?php
class Exercicios extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function addExercicios() {

		if(isset($_FILES['foto']) && !empty($_FILES['foto']['tmp_name'])) {
            
            $permidos = array('image/jpeg', 'image/jpg', 'image/png');
            
            if(in_array($_FILES['foto']['type'], $permidos)) {
                
                $nome = md5(time().rand(0, 999)).'.jpg';
                
                move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/images/imgs/'.$nome);
                
                $titulo = '';
                if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                    $titulo = addslashes($_POST['titulo']);
                    $texto = addslashes($_POST['texto']);
                }
                
                $sql = "INSERT INTO exercicios (name, url, txbody) VALUES ('$titulo', '$nome', '$texto')";
                $this->db->query($sql);
                
            }
		}
	}
}