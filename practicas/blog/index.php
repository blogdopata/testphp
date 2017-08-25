
<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

 if (!$conexion) {
	 header('Location:error.php');

  }

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
//print_r($posts);



if(!$posts){
	 header('Location:error.php');
}
//	echo "Error";
  //obtener_post();
// echo pagina_actual();

require 'views/index.view.php';
 ?>