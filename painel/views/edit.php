<section>
	<div class="container" style="padding-top: 100px;">
		<h1>Editar Artigo</h1>
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $item['titulo']; ?>" />
			</div>
			<div class="form-group">
				<label for="imagem">Imagem</label>
				<input type="file" name="imagem" id="imagem" class="form-control" />
				<img src="../../../assets/images/imgs/<?php echo $item['url']; ?>" border="0" height="50" />
			</div>
			<div class="form-group">
				<label for="texto">Texto</label>
				<textarea id="texto" name="texto" class="form-control"><?php echo $item['corpo']; ?></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Editar artigo</button>
		</form>
	</div>
</section>