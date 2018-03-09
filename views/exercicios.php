<section id="services" >
	<div class="container">

		<div class="section-header">
			<h2 class="section-title wow fadeInDown white">Dicas de exercícios</h2>
			<p class="wow fadeInDown">Exercícios são base de tudo para quem deseja perder peso. então resolvi compartilhar algumas dicas com vocês. <br> como sempre se você tem alguma sugestão mande um e-mail pra gente através da página de contato.</p>
		</div>

		<div class="row">
			<?php foreach($exercicios as $exe): ?>
			<div class="features">
				<a href="<?php echo BASE_URL; ?>exercicios/abrir/<?php echo $exe['id']; ?>">
				<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
						<div class="media service-box">
							<div class="pull-left">								
								<i class="img-view">
									<img src="<?php echo BASE_URL; ?>assets/images/imgs/<?php echo $exe['url']; ?>" border="0" />
								</i>
							</div>
							<div class="media-body">
								<h4 class="media-heading"><?php echo $exe['name']; ?></h4>
								<p><?php echo utf8_encode(substr($exe['txbody'],0, 80)); ?></p>
							</div>
						</div>
				</div><!--/.col-md-4-->
				</a>
			</div>
			<?php endforeach; ?>
		</div><!--/.row-->    
	</div><!--/.container-->
</section>