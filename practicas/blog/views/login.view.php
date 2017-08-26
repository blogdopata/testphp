
<?php require 'views/header.php'; ?>


<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Iniciar Sesion</h2>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario">
					<input type="text" name="usuario" placeholder="usuario">
					<input type="password" name="password" placeholder="Contraseña">
					<input type="submit" value="Iniciar sesión">

			</form>
				

	

		</article>
	</div>


<?php require 'views/footer.php'; ?>