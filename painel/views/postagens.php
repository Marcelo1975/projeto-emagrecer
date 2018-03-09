<section>
	<div class="container postsadd" style="padding-top: 100px;">
		<h1>Adicionar Novo Post</h1>
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" name="titulo" id="titulo" class="form-control" />
			</div>
			<div class="form-group">
				<label for="imagem">Imagem</label>
				<input type="file" name="imagem" id="imagem" class="form-control" />
			</div>
			<div class="form-group">
				<label for="texto">Texto</label>
				<textarea id="texto" name="texto" class="form-control"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Publicar artigo</button>
		</form>
	</div>
</section>