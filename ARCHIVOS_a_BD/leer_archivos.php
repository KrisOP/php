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

    //variables para almacenar los datos de los archivos
    $id="";
    $tipo="";
    require("datos_conexion.php");


        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

        if (mysqli_connect_errno())//si existe algun error de conexion
        {
            echo "Fallo al conectar con la BBDD";
            exit();
        }

        mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

        mysqli_set_charset($conexion,"utf8");//para que se reconozca los simbolos latinos como el acento, la e;e

        $consulta="SELECT * FROM archivos WHERE id=3";

        $resultado=mysqli_query($conexion,$consulta);

        while ($fila=mysqli_fetch_array($resultado))
        {
            $id=$fila["id"];
            $contenido=$fila["Contenido"];
            $tipo=$fila["Tipo"];
        
        }

            echo "ID: ". $id;
            echo "<br> <br>Tipo: ". $tipo . "<br><br><br>";

            //para mostrar el archivo necesitamos un contenedor
            echo "<div style='width=500px;height:400px;'> <embed height='100%' width='100%' name='embed_content' src='data:application/pdf;base64,".base64_encode($contenido)."'/></div>";


    ?>

    <div> 
    </div>
</body>
</html>