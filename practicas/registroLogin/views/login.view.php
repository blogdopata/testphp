<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Iniciar Sesión</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Iniciar sesion</h1>
	
		<hr class="border">	
		
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario" name="login">
			
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>
		
			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
			
			<div class="error">
				<?php if (!empty($errores)): ?>
					<ul>
						<?php echo $errores ?>
					</ul>
				<?php endif ?>

			</div>


		</form>
		<p class="texto-registrate">
			¿Aún no tienes cuenta ? 
			<a href="registrate.php"> Registrate</a>
		</p>

	
	</div>
</body>
</html>