<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Painel de controle</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/estilo.css" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/ckeditor/ckeditor.js"></script>
		 <script type="text/javascript">
		 	window.onload = function()  {
		 		CKEDITOR.replace( 'texto' );
		 	};
	    </script> 
	</head>
	<body> 
		<div class="top">
			<div class="container">
				<div class="nameuser">
					
				</div>
			</div>
		</div>
		<div class="menu">
			<img src="<?php echo BASE_URL; ?>assets/images/ico/menu.png" width="70" height="40" class="menu-mobile" onclick="toggleMenu()" />
			<div class="left-menu">
				<ul id="menu">
					<li><a href="<?php echo BASE_URL; ?>home">Home</a></li>
					<li><a href="<?php echo BASE_URL; ?>editpost">Todos os posts</a></li>
					<li><a href="<?php echo BASE_URL; ?>postagens">Add novo post</a></li>
					<li><a href="<?php echo BASE_URL; ?>historias">Add na Galeria</a></li>				
					<li><a href="<?php echo BASE_URL; ?>receitas">Add Receita</a></li>
					<li><a href="<?php echo BASE_URL; ?>exercicios">Add Exercício</a></li>
					<li><a href="<?php echo BASE_URL; ?>cadastrar">Add novo Admin</a></li>
					<li><a href="<?php echo BASE_URL; ?>editsenha">Edit Admin</a></li>
					<li><a href="http://localhost/projeto_emagrecer/">Sair</a></li>
				</ul>
			</div>
		</div>
		<?php
		$this->loadViewInTemplate($viewName, $viewData);
		?>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>
<script type="text/javascript">
	function toggleMenu(){
		var menu = document.getElementById("menu");
		if(menu.style.display == 'none' || menu.style.display == ''){
			menu.style.display = 'block';
		}else{
			menu.style.display = 'none';
		}
	}
</script>