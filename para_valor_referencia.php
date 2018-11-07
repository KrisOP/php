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
    //Las funciones por parametros es para el valor directamente a la funcion o en una variable
    function incrementa (&$valor)
    {
        $valor++;
        return $valor;
    }
    $numero=7;
    echo    incrementa ($numero). "<br>";

    echo $numero;
    ?>
</body>
</html>