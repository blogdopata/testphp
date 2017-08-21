<?php
/*Muesta nombre archivo con extension 
echo pathinfo('array.php',PATHINFO_BASENAME). "<br />";
// Muesta el nombre de la carpeta
echo pathinfo('user/caperta/array.php',PATHINFO_DIRNAME) . "<br />";

echo pathinfo('array.php', PATHINFO_EXTENSION) . "<br />";

echo pathinfo('array.php', PATHINFO_FILENAME) . "<br />";
*/
/* --------------------------------- */
/* Traer los archivos con extension : * .php */ /*
$resultados = glob('*.php');

print_r($resultados);

/* para traer con mas extensiones */
/*$resultados = glob('../*.{php,txt,png}',GLOB_BRACE);

print_r($resultados);*/

/* Elimna la ruta  y solo deja el nombre del archivo*/
echo basename('carpeta1/caperta2/archivo.php', '.php');

echo dirname('carpeta1/caperta2/archivo.php');

 ?>