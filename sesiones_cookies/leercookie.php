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

    if (isset($_COOKIE["prueba"]))//si existe la cookie
    {
        echo $_COOKIE["prueba"] . "primer archivo con cookie";//buscar una cookie en el disco duro si extiste una cookie con ese nombre
 
    }
    else{
        echo "No se ha encontrado la cookie";
    }
    ?>
</body>
</html>