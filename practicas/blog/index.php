
<?php 





require 'admin/config.php';
require 'functions.php';

// $conexcion conexion($bd_config);

// if (!$conexion) {
// 	header('Location:error.php');
// }
//obtener_post();
echo pagina_actual();
require 'views/index.view.php';
 ?>