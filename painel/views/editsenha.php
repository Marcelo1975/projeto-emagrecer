<section>
	<div class="container editpassword" style="padding-top: 100px;">
		<h1>Editar Admin</h1>
		<form method="POST">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome" class="form-control"  placeholder="Digite seu Nome de Usuário" />
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Digite seu E-mail" />
			</div>
			<div class="form-group">
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua Senha" />
			</div>
			<div class="form-group">
				<label for="senha1">Digite a Senha Novamente</label>
				<input type="password" name="senha1" id="senha1" class="form-control" placeholder="Digite sua Senha Novamente"/>
			</div>
			<button type="submit" class="btn btn-primary">Editar Admin</button>
		</form>
	</div>
</section>

<?php if($worning): ?>
	<div style="font-size: 18px;margin-left: 45%;">
		<?php echo $worning;  ?>
	</div>
<?php endif; ?>