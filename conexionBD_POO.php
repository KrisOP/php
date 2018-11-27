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

        $conexion=new mysqli ("localhost", "root", "12345678","pruebas");

        if ($conexion->connect_errno)
        {
            echo "fallo la conexion   " . $conexion->connect_errno;//muestra el codigo del error
        }

        //mysqli_set_charset($conexion, "utf8");//procedimental

        //orientada a objeto
        $conexion->set_charset("utf8");

        $sql="SELECT * FROM productos";

        //$resultados=mysqli_query($conexion,$sql);

        $resultados = $conexion->query($sql);

        if ($conexion->errno)//si falla
        {
            die ($conexion->error);//cerrar el error
        }

        //while ($fila=mysqli_fetch_arrar($conexion,MYSQL_ASOC){

            while ($fila=$resultados->fetch_assoc())
            {
                echo "<table width'50%' align='center' border='1px' dotted #FF000 margin='auto'> <tr> <td>";
        //$fila=mysqli_fetch_row($resultado);//
        echo $fila['SECCION'] . "</td> <td>";//accediendo al primer usuario
        echo $fila['NOMBREARTICULO']. "</td> <td>  ";
        echo $fila['PAIS']. "</td> <td> </tr></table>";
        //echo $fila[3]. "</td> <td>";
        //echo $fila[4]. "</td> <td></tr></table>";

        echo"<br>";
        echo"<br>";
            }

            //mysqli_close($conexion);
            $conexion->close();
    ?>
</body>
</html>