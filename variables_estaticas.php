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

    function incrementavalor()
    {
        static $contador=0;//variable estatica (se ejecuta una sola vez)
        $contador++;

        echo $contador . "<br>";
    }

    incrementavalor();
    incrementavalor();
    incrementavalor();
    incrementavalor();//ahora se conserva el valor de la variable

        
    ?>
</body>
</html>