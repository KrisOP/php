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
    $consulta="select * from productos where PAIS='España'";

    $resultado=mysqli_query($conexion,$consulta);

    //acceder la primera vez al primer registro pero en un bucle accede a cada uno de los registros
   // $fila=mysqli_fetch_row($resultado); //recorre fila a fila lo almacenado en el resultado (tabla virtual)
    
    $registros=1;

    while(($fila=mysqli_fetch_row($resultado))==true)//dejara de acceder cuando no haya informacion
    {
        echo "<table width'50%' align='center' border='1px' dotted #FF000 margin='auto'> <tr> <td>";
        //$fila=mysqli_fetch_row($resultado);//
        echo $fila[0] . "</td> <td>";//accediendo al primer usuario
        echo $fila[1]. "</td> <td>";
        echo $fila[2]. "</td> <td>";
        echo $fila[3]. "</td> <td>";
        echo $fila[4]. "</td> <td></tr></table>";

        echo"<br>";
        echo"<br>";
    }

    //para cerrar la conexxion para optimizar recursos
    mysqli_close($conexion);

    ?>
</body>
</html>