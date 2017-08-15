<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="contenedor">
				
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)){ echo $nombre;}  ?>">
			<input type="text" name="mail" placeholder="e-mail" value="<?php if(!$enviado && isset($mail)){ echo $mail;} ?>">
			<textarea name="mensaje" placeholder="Mensaje: "></textarea>

			<?php if(!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif ($enviado): ?>
				<div class="alert success">
					<p>Enviado correctamente</p>
				</div> 
			<?php endif?>
			

			<input type="submit" name="submit"  value="enviamelo">

		</form>
	</div>
</body>
</html>