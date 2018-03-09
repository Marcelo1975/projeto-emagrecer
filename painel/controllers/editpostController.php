<?php
class editpostController extends Controller{

	public function index(){
		$array = array();

		$p = new Postagens();
		$id = '';

		$array['artigos'] = $p->getArtig($id);

		
		$this->loadTemplate('editpost', $array);
	}

	public function edit($id) {
		$array = array();
		$item = array();

		$p = new Postagens();

		$array['item'] = $p->getItem($id);

		if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = addslashes($_POST['titulo']);
			$texto = addslashes($_POST['texto']);

			$p->updateArtigo($id, $titulo, $texto);

			if(isset($_FILES['imagem']) && !empty($_FILES['imagem']['tmp_name'])) {

				$imagem = $_FILES['imagem'];
				if(in_array($imagem['type'], array('image/jpeg', 'image/jpg','image/png'))){
					$exten = 'jpg';
					if($imagem['type'] == 'image/jpg') {
						$exten = 'png';
					}
					$nomeMd5 = md5(time().rand(0, 9999)).'.'.$exten;

					move_uploaded_file($imagem['tmp_name'], '../assets/images/imgs/'.$nomeMd5);

					$p->updateImagem($id, $nomeMd5);
				}

			}
			header("Location: ".BASE_URL."editpost");
		}
		$this->loadTemplate("edit", $array);

	}

	public function del($id) {

		if(!empty($id)) {
			$p = new Postagens();
			$p->deleteItem($id);

			header("Location: ".BASE_URL."editpost");
		}
	}
	
}