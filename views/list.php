<section>
	<div class="container receit">
		<h1 style="text-align: center;">Receitas Saudáveis</h1>
		<?php foreach($verreceitas as $receita): ?>
			<h2><?php echo $receita['title']; ?></h2>
			<img src="<?php echo BASE_URL; ?>assets/images/team/<?php echo $receita['img']; ?>" />
			<p><?php echo $receita['body']; ?></p>
		<?php endforeach; ?>
	</div>
</section>