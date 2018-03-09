<section id="team">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title wow fadeInDown">Receitas Saudáveis</h2>
			<p class="wow fadeInDown">Trata se de receitas totalmentes naturais e nutritivas. você emagrece sem passar fome e assim sem perder a saúde. <br> caso você conheça alguma receita especial mande nos um e-mail através da página de contato.</p>
		</div>          
		<div class="row" data-anim-type="fade-in-up">
			<?php foreach($receitas as $rec): ?>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="team-wrapper">
						<div class="team-inner" style="background-image: url('assets/images/team/<?php echo $rec['img']; ?>')">
						<a href="<?php echo BASE_URL; ?>receitas/list/<?php echo $rec['id']; ?>"> <i class="fa fa-twitter"></i></a>
						</div>
						<div class="description">
							<h3><?php echo substr($rec['title'], 0, 15); ?></h3>
							<p>
							<?php echo $rec['body']; ?>
							</p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>