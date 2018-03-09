<div class="container fotoadd" style="padding-top: 100px;">
	<h1>Adicionar Nova Foto na Galeria de História</h1>
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="titulo">Título</label>
			<input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título da História" />
		</div>
		<div class="form-group">
			<label for="foto">Imagem</label>
			<input type="file" name="foto" id="foto" class="form-control" />
		</div>

		<button type="submit" class="btn btn-primary">Adicionar Foto</button>
	</form>
</div>