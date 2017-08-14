
<?php
// Comprobar si el formulario fue enviado :

// Accedemos al metodo de ENVIO GET OR POST
// FORMA 1

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	echo "Se enviaron por GET";
}else{
	echo "Se enviaron por POST";
}

/*2da FORMA - agregandole al submit un name
	Se usara cuando tienes varios formularios
	Si tienes uno mejor es la 1era forma

 recordar que ISSET() define si una variable existe / este definida 
  
if(isset($_POST['submit-form2'])){
	echo "Se han enviado datos correctamente";
	print_r($_POST['submit-form2']);
}
*/
?>
