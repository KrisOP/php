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

   //$contra=//almacenar lo que se esta pasando del cuadro de texto buscar 
   require("conexion.php");
   //$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

    
     $usuario=mysqli_real_escape_string ($conexion, $_GET["usu"]);//para que no permita ingresar con caracteres especiales y evitar las inyecciones sql
     $contra=mysqli_real_escape_string ($conexion, $_GET["con"]);

    if (mysqli_connect_errno())//si existe algun error de conexion
    {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    
    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

    //mysqli_addslashes()
    mysqli_set_charset($conexion,"utf8");//para que se reconozca los simbolos latinos como el acento, la e;e
    //$consulta="select * from productos where NOMBREARTICULO LIKE'%$busqueda%'";
    //inyeccion sql ('or'1'='1) introducir eso en el campo de contrasena y se mostrara todos los datos
    $consulta="DELETE from datospersonales where Nombre='$usuario' AND NIF = '$contra'";
    
    echo "$consulta <br> <br>";

    mysqli_query($conexion, $consulta);

    if (mysqli_affected_rows($conexion)>0)
    {
        echo "baja procesada";
    }
    else
    {
        echo "no se ha encontrado el usuario";
    }
    
    /*if (mysqli_query($conexion, $consulta))
    {
        echo "baja procesada";
        mysqli//si hay filas afectadas en la ultima consulta
    }*/

    mysqli_close($conexion);

    ?>
</body>
</html>