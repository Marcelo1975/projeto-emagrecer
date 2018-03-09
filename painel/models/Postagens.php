<?php
class Postagens extends Model{

	  public function addPost() {
        
        if(isset($_FILES['imagem']) && !empty($_FILES['imagem']['tmp_name'])) {
            
            $tipos = array('image/jpeg', 'image/jpg', 'image/png');
            
            if(in_array($_FILES['imagem']['type'], $tipos)) {
                
                $nome = md5(time().rand(0, 999)).'.jpg';
                
                move_uploaded_file($_FILES['imagem']['tmp_name'], '../assets/images/imgs/'.$nome);
                
                $titulo = '';
                if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                    $titulo = addslashes($_POST['titulo']);
                    $texto = addslashes($_POST['texto']);
                }
                
                $sql = "INSERT INTO postagens (titulo, url, corpo) VALUES ('$titulo', '$nome', '$texto')";
                $this->db->query($sql);
                
            }
            
            
        }
        
    }

    public function getPost() {
        $array = array();
        
        $sql = "SELECT * FROM postagens";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }

    public function getArtig($id) {
        $data = array();

        $sql = "SELECT * FROM postagens";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
        }

        return $data;
    }

    public function getItem($id) {
        $data = array();

        $sql = "SELECT * FROM postagens WHERE id = '$id'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0) {
            $data = $sql->fetch();
        }

        return $data;
    }

    public function updateArtigo($id, $titulo, $texto) {

        $sql = "UPDATE postagens SET titulo = '$titulo', corpo = '$texto' WHERE id = '$id'";
        $this->db->query($sql);   
    }

    public function updateImagem($id, $nomeMd5) {

        $sql = "UPDATE postagens SET url = '$nomeMd5' WHERE id = '$id'";
        $this->db->query($sql);
    }

    public function deleteItem($id) {

        $sql = "SELECT url FROM postagens WHERE id = '$id'";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0) {
            $imagem = $sql->fetch();
            $imagem = $imagem['url'];

            unlink('../assets/images/imgs/'.$imagem);

            $this->db->query("DELETE FROM postagens WHERE id = '$id'");
        }
    }
}