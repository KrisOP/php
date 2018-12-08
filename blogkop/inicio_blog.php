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


    ?>
</body>
</html>