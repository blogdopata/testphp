
<?php
/*print_r($_POST);*/
if(!$_POST){
header('Location: http://localhost:8080/testPHP/formularios/');	
}
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo 'Hola, ' . $nombre .' eres ' . $sexo ;
?>
