<?php 
	$errores="";
	$enviado="";
// ISSET DETERMINA SI UNA VARIABLE FUE DEFINIDA o ES NULL / == 1
if(isset($_POST['submit'])){
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$mensaje = $_POST['mensaje'];
 /* validación nombre*/ 
	if(!empty($nombre)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre,FILTER_SANITIZE_STRING);
		
	}else{
		$errores.= "Ingrese un Nombre correctoxD <br/>";
	}
	/*  validadcion mail */
	if(!empty($mail)){
		$mail = filter_var($mail,FILTER_SANITIZE_EMAIL);
		if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
			$errores.="Ingrese un email valido pls <br/>";
		}
	}else{
		$errores.="Ingrese algun  email <br/>";
	}
	/* validacion mensaje */
	if(!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripslashes($mensaje);
	}else {
		$errores.="Ingrese algun mensaje";
	}
	// preguntando si no hay errores
	if(!$errores){
		$enviar_a = "vcaballeroc@usmp.pe";
		$asunto="Correo enviado d emi site";
		$msj_preparado = "De: $nombre \n";
		$msj_preparado.="Correo: $mail \n";
		$msj_preparado.="Mensaje: $mensaje";

		mail($enviar_a, $asunto, $msj_preparado);

		$enviado= 'true';
	}

}


require 'index_view.php' 
 ?>



<pre>

<?php print_r($_POST); ?>

</pre>



<pre>
<?php   print_r($_SERVER); ?>
</pre> 

