<?php
require_once("../modelo/productos_modelo.php");
//llamar al getter y ejecutar el constructos del modelo
$producto = new Productos_model ();//instanciar la clase en el objeto

$matrizProducto=$producto->get_productos();

require_once("../vista/productos_view.php");

?>