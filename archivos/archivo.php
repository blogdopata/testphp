<?php 
// if(file_exists('documento.txt')){
// 	echo "El archivo existe";
// }else{
// 	echo "El archiivo no existe";
// }

/* leer contenido :D */

//echo file_get_contents('documento.txt');

/* Agregar contenido al archivo*/

//file_put_contents('documento.txt', "Hola victorSAYA \n",FILE_APPEND);

// file_put_contents('documento.txt','');

// for ($i=1; $i <= 10; $i++) {
// 	file_put_contents('documento.txt', "$i \n",FILE_APPEND);
// 		# code...
// }

$archivo = file('documento.txt');
echo '<pre>';
print_r($archivo);
echo '</pre>';

 ?>