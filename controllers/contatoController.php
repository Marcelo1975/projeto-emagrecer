<?php
class contatoController extends Controller {

	public function index() {
        $data = array('mens'=> '');

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        	$nome = addslashes($_POST['nome']);
        	$email = addslashes($_POST['email']);
        	$assunto = addslashes($_POST['assunto']);

        	$html = "Nome: ".$nome."<br/>E-mail: ".$email."<br/>Assunto: ".$assunto;

        	$cabecalho = 'From: simonecssemiro34.sc.sc@.com'."\r\n";
        	$cabecalho .= 'Reply-To: '.$email."\r\n";
        	$cabecalho .= 'X-Mailer: PHP/'.phpversion();

        	mail("simonecssemiro34.sc.sc@.com", "Contato direto do site em ".date('d/m/Y'), $html, $cabecalho);

        	$data['mens'] = "E-mail enviado com sucesso."; 
        }

        $this->loadTemplate('contato', $data);		
	}
}