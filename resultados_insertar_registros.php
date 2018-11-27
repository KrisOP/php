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

   $secc=$_GET["secc"];
   $n_art=$_GET["n_art"];
   $pre=$_GET["pre"];
   $fec=$_GET["fec"];
   $p_ori=$_GET["p_ori"];
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

    if (mysqli_connect_errno())//si existe algun error de conexion
    {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    
    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

    //mysqli_addslashes()
    mysqli_set_charset($conexion,"utf8");

    //1 paso crear instruccion sql
    $sql= "INSERT INTO  productos ( SECCION, NOMBREARTICULO, FECHA, PAIS, PRECIO) VALUES (?,?,?,?,?)";

    //2 paso preparar la consulta

    $resultado=mysqli_prepare($conexion,$sql);

    //3. unir los parametros a la sentencia sql
    $ok = mysqli_stmt_bind_param($resultado, "ssssi", $secc,$n_art,$fec,$p_ori,$pre);

    //4. ejecutar la consulta

    $ok=mysqli_stmt_execute($resultado);

    if ($ok==false)
    {
        echo "error en ejecutar la consulta";
    }
    else{
        //5. asociar las variables a los resultados de la consulta
        //$ok=mysqli_stmt_bind_result($resultado, $Nombre, $Pais, $Precio);
    }

    //6. leer la consulta
    echo "Agregado nuevo registro : <br> <br>";

    /*while (mysqli_stmt_fetch($resultado))
    {
        echo $Nombre . " " . $Pais . " " . $Precio . "<br>";
    }*/
    mysqli_stm_close($resultado);

    ?>
</body>
</html>