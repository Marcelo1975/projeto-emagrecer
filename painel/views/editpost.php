<div class="container allposts" style="padding-top: 100px;">
	<h1>Todos os Posts</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Título</th>
				<th>Texto</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($artigos as $ar): ?>
				<tr>
					<td><?php echo substr($ar['titulo'], 0, 30); ?></td>
					<td><?php echo substr($ar['corpo'], 0, 30); ?></td>
					<td>
						<a class="btn btn-primary" href="<?php echo BASE_URL;?>editpost/edit/<?php echo $ar['id']; ?>">Editar</a>
						<a class="btn btn-danger" href="<?php echo BASE_URL; ?>editpost/del/<?php echo $ar['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir esse post?');">Excluir</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>