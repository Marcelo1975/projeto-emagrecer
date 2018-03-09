<?php
class Historia extends Model{

	public function __construct() {
		parent::__construct();
	}

	public function addFoto() {

		if(isset($_FILES['foto']) && !empty($_FILES['foto']['tmp_name'])) {

			$tipos = array('image/jpeg', 'image/jpg', 'image/png');

			if(in_array($_FILES['foto']['type'], $tipos)) {

				$nome = md5(time().rand(0, 999)).'.jpg';

				move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/images/imgs/'.$nome);

				$titulo = '';
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
					$rotulo = addslashes($_POST['titulo']);
				}

				$sql = "INSERT INTO historia (rotulo, url) VALUES ('$rotulo', '$nome')";
				$this->db->query($sql);

			}
        }
	}
}