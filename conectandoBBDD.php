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

   //$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

    if (mysqli_connect_errno())//si existe algun error de conexion
    {
        echo "Fallo al conectar con la BBDD";
        exit();
    }
    
    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");//para que se reconozca los simbolos latinos como el acento, la e;e
    $consulta="select * from datospersonales";

    $resultado=mysqli_query($conexion,$consulta);

    //acceder la primera vez al primer registro pero en un bucle accede a cada uno de los registros
   // $fila=mysqli_fetch_row($resultado); //recorre fila a fila lo almacenado en el resultado (tabla virtual)
    
    $registros=1;

    while(($fila=mysqli_fetch_row($resultado))==true)//dejara de acceder cuando no haya informacion
    {
        //$fila=mysqli_fetch_row($resultado);//
        echo $fila[0];//accediendo al primer usuario
        echo $fila[1];
        echo $fila[2];
        echo"<br>";
    }

    //para cerrar la conexxion para optimizar recursos

    mysqli_close($conexion);

    ?>
</body>
</html>