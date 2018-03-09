<div class="container receit">
	<?php foreach($postler as $po): ?>
		<h2 style="text-align: center;"><?php echo $po['titulo']; ?></h2>
		<img src="<?php echo BASE_URL; ?>assets/images/imgs/<?php echo $po['url']; ?>" />
		<?php echo $po['corpo']; ?>
	<?php endforeach; ?>
</div>