<?php require 'header.php'; ?>


<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Nuevo Articulo</h2>
			<form enctype="multipart/form-data" class="formulario" method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<input type="text" name="titulo" placeholder="titulo del articulo">
				<input type="text" name="extracto" placeholder="Extracto del Articulo">
				<textarea name="texto" placeholder="Texto del Articulo"></textarea>
				<input type="file" name="thumb">

				<input type="submit" value="Crear articulo">


			</form>

		</article>
	</div>
</div>




 <?php require 'footer.php'; ?>