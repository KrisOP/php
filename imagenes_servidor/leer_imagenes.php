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
    //require ("datos_conexion.php");
    require("datos_conexion.php");


        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

        if (mysqli_connect_errno())//si existe algun error de conexion
        {
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

        mysqli_set_charset($conexion,"utf8");//para que se reconozca los simbolos latinos como el acento, la e;e

        $consulta="SELECT FOTO FROM PRODUCTOS WHERE id_productos='15'";

        $resultado=mysqli_query($conexion,$consulta);

        while ($fila=mysqli_fetch_array($resultado))
        {
            $ruta_img=$fila["FOTO"];
        }

            echo $ruta_img;

    ?>

    <div> 
        <img src="/practice_php/imagenes_servidor/cargas/<?php echo $ruta_img;?>" alt="Imagen del Articulo 16" width="25%"/>
    </div>
</body>
</html>