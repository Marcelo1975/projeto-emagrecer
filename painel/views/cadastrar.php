<div class="container usernew">
	<div  class="loginpainel">
		<form method="POST">
		<h2>Cadastrar novo admin</h2>

			<label>Nome:</label><br/>
			<input type="text" name="nome" required autofocus id="inuptadd" /><br/><br/>


			<label>E-mail:</label><br/>
			<input type="email" name="email" required id="inuptadd"/><br/><br/>

			<label>Senha:</label><br/>
			<input type="password" name="senha" required id="inuptadd" /><br/><br/>

			<input type="submit" value="Cadastrar" id="inuptadd"/><br/>
		</form>
	</div>
</div>

<?php if($alerta): ?>
	<div class="alert">
		<?php echo $alerta; ?>
	</div>
<?php endif; ?>