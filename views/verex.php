<section id="services" >
	<div class="container">

		<div class="section-header">
			<h2 class="section-title wow fadeInDown white">Dicas de exercícios</h2>
			<p class="wow fadeInDown">Que bom ter você por aqui aproveite bem sua leitura e seja mais que bem vindo.</p>
		</div>

		<div class="row execicio">
			<?php foreach($exers as $exe): ?>
				<h2 class="section-title wow fadeInDown white animated" style="visibility: visible; animation-name: fadeInDown; border-bottom: 2px solid #cb2d1b;"><?php echo $exe['name']; ?></h2>
				<img src="<?php echo BASE_URL; ?>assets/images/imgs/<?php echo $exe['url']; ?>" border="0" />
				<?php echo $exe['txbody']; ?>
			<?php endforeach; ?>
		</div><!--/.row-->    
	</div><!--/.container-->
</section><!--/#services-->