<?php foreach($usuarios as $u): ?>
	<p class="nameuser">Olá, <?php echo $u['nome']; ?></p>
<?php endforeach; ?>
<div class="container principal">
	<section>
		<div class="container textopanel" style="padding-top: 100px;">
			<h2>Seja bem vindo/a ao seu painel de controle</h2>
			<p>Presado/a usuário, por favor, navegue pelo menu de opções ao lado para realizar suas tarefas, aqui você terá controle total sobre seu sistema. não precisando assim recorrer ha nenhum outro tipo de suporte, o que faz com que seus gastos aumente. para mais detalhes, entre em contato enviando um e-mail para: <u>cecel.alex@gmail.com</u></p>
		</div>
	<section>
		<div class="container painel">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo BASE_URL; ?>assets/images/cap1.PNG" />
				</div>
				<div class="col-sm-6">
					<img src="<?php echo BASE_URL; ?>assets/images/cap2.PNG" />
				</div>
			</div>
		</div>
		<div class="container painel">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo BASE_URL; ?>assets/images/cap3.PNG" />
				</div>
				<div class="col-sm-6">
					<img src="<?php echo BASE_URL; ?>assets/images/cap4.PNG" />
				</div>
			</div>
		</div>
	</section>
	<footer class="container footer">
		<hr/>
		<div class="row">
			<div class="col-sm-4 footerrow"><strong>Sessão do Administrador</strong></div>
			<div class="col-sm-4"><img src="<?php echo BASE_URL; ?>assets/images/ico/email.png" width="20" height="20"/> - cecel.alex@gmail.com</div>
			<div class="col-sm-4"><img src="<?php echo BASE_URL; ?>assets/images/ico/icon1.PNG" width="20" height="20"/> - (37)9 9932-4082</div>
		</div>
	</footer>
</div>