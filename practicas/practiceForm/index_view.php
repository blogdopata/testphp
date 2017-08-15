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
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
		<input type="text" id="nombre" class="form-control" name="nombre" placeholder="nombre" value="<?php if(!$enviado && isset($nombre)){echo $nombre;} ?>">
		
		<input type="text" id="mail" class="form-control" name="mail" placeholder="mail" value="<?php if(!$enviado && isset($mail)){echo $mail;} ?>" >
		
		<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje: "></textarea>
		<!-- Si la variable $erorres NO esta vacia --> 
		<?php  if(!empty($errores)):?>
			<div class="alert error">
				<?php echo $errores; ?>
			</div>
		<?php elseif ($enviado): ?>
			<div class="alert success">
				<p>Enviado Correctamente</p>
			</div> 
		<?php endif ; ?>


		
		<input type="submit" name="submit" class="btn btn-primary" >
</form>
</div>
</body>
</html>