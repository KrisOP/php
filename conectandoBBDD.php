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
    //CONEXION DE UNA BASES DE DATOS

    $db_host="localhost";
    $db_nombre="pruebas";
    $db_usuario="root";
    $db_contra="12345678";

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    $consulta="select * from datospersonales";

    $resultado=mysqli_query($conexion,$consulta);

    $fila=mysqli_fetch_row($resultado); //recorre fila a fila lo almacenado en el resultado (tabla virtual)
    
    echo $fila[0];//accediendo al primer usuario

    echo $fila[1];
    echo $fila[2];






    ?>
</body>
</html>