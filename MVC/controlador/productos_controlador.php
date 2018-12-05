<?php
require_once("modelo/productos_modelo.php");//incluyendo el modelo
//llamar al getter y ejecutar el constructos del modelo
$productos = new Productos_modelo ();//instanciar la clase en el objeto

$matrizProducto=$productos->get_productos();

require_once("vista/productos_view.php");//incluyendo la vista 

?>