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

    $nombre="Kris";

    function dameNombre()
    {
        global $nombre;//tiene que estar aca siempre
        $nombre="Maria";//esta variable sin "golbal" no tiene nada que ver con la variable donde guardamos Kris
    }

    dameNombre();

    echo $nombre;

    ?>
</body>
</html>