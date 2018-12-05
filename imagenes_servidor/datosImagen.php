<?php

//recibimos los datos de la imagen

$nombre_imagen=$_FILES['imagen']['name'];//guardamos el nombre de la imagen cargada en el formulario
$tipo_imagen=$_FILES['imagen']['type'];//guardamos el tipo de la imagen cargada en el formulario
$tamanio_imagen=$_FILES['imagen']['size'];//guardamos el tamanio de la imagen cargada en el formulario

//ruta de la carpeta destinos en el servidor para guardarla
$carpeta_destino=$_SERVER['DOCUMENT_ROOT']. '/practice_php/imagenes_servidor/cargas/';

//movemos la imagen del directorio temporar al directorio escogido
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);//tmp_name seria la propiedad que devuelve el nombre de la carpeta temporal 

?>