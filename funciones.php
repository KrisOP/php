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

    //FUNCIONES PREDEFINIDAS
    $palabra="KRIS";
    echo (strtolower($palabra));//convertir una palabra a minuscula

    function suma ($num1, $num2)
    {
        $resultado=$num1+$num2;

        return $resultado;
    }

    echo "<br>" . suma (5,7);


    function frase_mayus ($frase,$conversion=true)
    {
        $frase=strtolower($frase);//convertir toda la frase en minuscula

        if ($conversion==true)
        {
            $resultado=ucwords($frase);//Poner la primera letra en MAYUSCULA
        }
        else{
            $resultado=strtoupper($frase);//convertir todo en mayuscula
        }
        return $resultado;

        
    }

    echo (frase_mayus ("esto es una prueba",false));
    ?>
</body>
</html>