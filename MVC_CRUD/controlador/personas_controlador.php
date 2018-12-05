<?php
require_once("modelo/personas_modelo.php");//incluyendo el modelo
//llamar al getter y ejecutar el constructos del modelo
$personas = new Personas_modelo ();//instanciar la clase en el objeto

$matrizPersonas=$personas->get_personas();

require_once("vista/personas_view.php");//incluyendo la vista 

?>