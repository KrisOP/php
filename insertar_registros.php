<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

        //$busqueda=$_GET["buscar"];//almacenar lo que se esta pasando del cuadro de texto buscar 
    require("conexion.php");
    //$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

    if (mysqli_connect_errno())//si existe algun error de conexion
    {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
 
 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

 mysqli_set_charset($conexion,"utf8");//para que se reconozca los simbolos latinos como el acento, la e;e
 $consulta="INSERT INTO PRODUCTOS (SECCION,NOMBREARTICULO) VALUES ('DEPORTES','BATE DE BEISBOL')";

 $resultado=mysqli_query($conexion,$consulta);


 //para cerrar la conexxion para optimizar recursos
 mysqli_close($conexion);

 ?>
</body>
</html>