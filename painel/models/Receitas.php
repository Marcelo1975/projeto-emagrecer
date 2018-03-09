<?php
class Receitas extends Model{

	public function addReceitas() {

		if(isset($_FILES['imagem']) && !empty($_FILES['imagem']['tmp_name'])) {
            
            $tipos = array('image/jpeg', 'image/jpg', 'image/png');
            
            if(in_array($_FILES['imagem']['type'], $tipos)) {
                
                $nome = md5(time().rand(0, 999)).'.jpg';
                
                move_uploaded_file($_FILES['imagem']['tmp_name'], '../assets/images/team/'.$nome);
                
                $titulo = '';
                if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                    $titulo = addslashes($_POST['titulo']);
                    $texto = addslashes($_POST['texto']);
                }
                
                $sql = "INSERT INTO receitas (title, body, img) VALUES ('$titulo', '$texto', '$nome')";
                $this->db->query($sql);
                
            }
              
        }
	}
}