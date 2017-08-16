<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Contacto</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="wrap">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		<input type="text" id="nombre" class="form-control" name="nombre" placeholder="nombre" value="<?php if(!$enviado && !empty($nombre)){ echo $nombre; } ?>">
		
		<input type="text" id="correo" class="form-control" name="correo" placeholder="correo"  value="<?php if(!$enviado && isset($correo)){ echo $correo; } ?>">
		
		<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje: "><?php if(!$enviado && isset($mensaje)){ echo $mensaje; } ?></textarea>
		<!-- Si la variable $erorres NO esta vacia --> 
		<?php  if(!empty($errores)): ?>
			<div class="alert error">
				<?php echo $errores; ?>
			</div>
		<?php elseif($enviado): ?>
			<div class="alert success">
				<p>Enviado Correctamente</p>
			</div>
		<?php endif ?>

		
		
		<input type="submit" name="submit" class="btn btn-primary" value="Enviar correo">
</form>
</div>
</body>
</html>