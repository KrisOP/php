<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>BlogKop </h2>

    <?php
    $miConexion=mysqli_connect("localhost", "root","12345678","blogkop");

    //comprobar conexion

    if (!$miConexion)
    {
        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }

    $miConsulta="SELECT * FROM contenido ORDER BY fecha DESC";

    if ($resultado=mysqli_query($miConexion,$miConsulta))
    {
        while ($registro=mysqli_fetch_assoc($resultado)) 
        {
            echo "<h3>". $registro['titulo']. "</h3>";
            echo "<h4>" . $registro['fecha']. "</h4>";
            //echo  $registro['comentario'];
            echo "<div>". $registro['comentario']. "</div><br/><br/>";
            
            //evaluar si tenemos una imagen almacenada

            if($registro['imagen']!="")//si el campo de la imagen no esta vacia entonces mostrarla
            {
                    echo "<img src='imagenes/".$registro['imagen']."'.width='10px'/>";
            } 
            
            echo "<hr/>"; 
        }
    }

    ?>
</body>
</html>