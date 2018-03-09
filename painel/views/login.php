<style type="text/css">
	body{
		background-image: url(./assets/images/back4.jpg);
		background-repeat: no-repeat;
	}
	.loginpainel{
		margin:auto;
		width:320px;
		border: 1px solid #000;
		background-color: #000;
		opacity: 0.5;
		margin-top:15%;
	}
	.loginpainel h2{
		text-align: center;
		color:#fff;
	}
	.loginpainel form{
		width:300px;
		margin-left: 12px;
	}
	.loginpainel input[type=text],
	.loginpainel input[type=email],
	.loginpainel input[type=password]{
		width:270px;
		height:30px;
		border-radius: 8px;
		padding: 10px;
	}
	.loginpainel form label{
		color:#fff;
	}
	.loginpainel input[type=submit]{
		width:150px;
		height: 50px;
		margin-left: 70px;
		background-color: #ff0000;
		color:#fff;
		border-radius: 10px;
		margin-bottom: 20px;
		margin-top:20px;
		font-size:15px;
		font-weight: bold;
	}
	.loginpainel input[type=submit]:hover{
		width:150px;
		margin-left: 60px;
		background-color: #fff;
		color:#000;
		border-radius: 10px;
		box-shadow: 1px 1px 30px #FFFF00;
	}
	.loginpainel a{
		color: #FFF;
		text-decoration: none;
		margin-left: 50px;
	}
</style>
<div  class="loginpainel">
	<h2>logar como admin</h2>
	<form method="POST">

		<label>Nome:</label>
		<input type="text" name="nome" required autofocus /><br/><br/>

		<label>Senha:</label>
		<input type="password" name="senha" required /><br/><br/>

		<input type="submit" value="Entrar"/><br/>
	</form>
</div>
<?php if(!empty($aviso)): ?>
	<h2 style="width: 100%;height: 40px;margin-left:41%;"><?php echo $aviso; ?></h2>
<?php endif; ?>
