<?php 
require 'funciones.php';

$conexion = conexion('galeria_practica','root','');

if(!$conexion){
	//header('Location:index. php');
	echo "se callo la conex";
	die();

}
// comprabamos si los datos se enviaron por POST y se enviaron los archivos.
if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
// check guarda la imagen o un FALSE
	$check = @getimagesize($_FILES['foto']['tmp_name']);
	echo "<pre>";
	var_dump($_FILES);
	echo "</pre>";
	if($check !== false){
		$carpeta_destino = 'fotos/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

		$statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');
		$statement->execute(array(
			':titulo' => $_POST['titulo'],
			':imagen' => $_FILES['foto']['name'],
			':texto' => $_POST['texto']
			));
		echo "inserto data";

	}else{
		$error = "No es una imagen o el archivo es muy grandote";
	}
}



require 'views/subir.view.php';
 ?>