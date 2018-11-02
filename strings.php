<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
        .resaltar
        {
            color: #F00;
            font-weight:bold; /*negrita*/
        }
</style>

<body>
    
    <?php

        $nombre="Kris";
       // echo "<p class='resaltar'>Esta es una frase violenta</p>";
       echo "<p class=\"resaltar\">Esta es otra frase violenta .$nombre </p>";//agragar barras invertidas para que no entren en conflicto las comillas dobles

       //comparar cadenas de caracteres

       $var1="CASa";
       $var2="CASA";

       $resultado=strcmp ($var1,$var2); //si son iguales devuelve 0... Evalua si hay o no Mayuscula
       $resultado2=strcasecmp ($var1,$var2); //si son iguales devuelve 0 ...No importa si hay o no mayusculas

       echo "El resultado primero es ".$resultado ." </br>";
       echo "El resultado segundo es ".$resultado2 . "<br>";

       if($resultado)
       {
           echo "No coinciden (usando strcmp) <br>";
       }
       else
       {
           echo "Coinciden (usando strcmp)<br>";
       }

       if ($resultado2)
       {
           echo "No coinciden (usando strcasecmp)<br>";
       }
       else
       {
            echo "Coinciden (usando strcasecmp)<br>";
       }

    ?>
</body>
</html>