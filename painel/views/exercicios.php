<section>
	<div class="container exeradd" style="padding-top: 100px;">
		<h1>Adicionar Exercício</h1>
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" name="titulo" id="titulo" class="form-control" />
			</div>
			<div class="form-group">
				<label for="foto">Imagem</label>
				<input type="file" name="foto" id="foto" class="form-control" />
			</div>
			<div class="form-group">
				<label for="texto">Texto</label>
				<textarea id="texto" name="texto" class="form-control"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Adicionar Exercício</button>
		</form>
	</div>
</section>