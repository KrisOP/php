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

    //arreglos 2d con arreglos asociativos

    $alimentos=array("fruta"=>array ("tropical"=>"kiwi",
                                     "citrico" => "mandarina",
                                     "otros" => "manzana"),

                    "leche"=>array ("animal"=>"vaca",
                                     "vegetal"=>"coco"),

                    "carne"=>array ("vacuno"=>"lomo",
                                    "porcino"=>"pata"));

    //echo $alimentos ["carne"]["vacuno"];//acceder a los datos del arreglo 2d

    foreach ($alimentos as $clave_alim=>$alim)//$clave_alim(primera dimension) $alim(segunda dimension)
    {
        echo "$clave_alim: <br>";
        
        //ACCEDER A LA SEGUNDA DIMENSION
        //$clave(para el primer elemento) $valor(para el segundo elemento)
        while (list($clave,$valor)=each($alim))//listar lo que hay en el interior, es decir en $alim
        {   
            echo "$clave=$valor<br>";

        }

        echo "<br>";
    }

    //echo var_dump($alimentos);//imprimir los datos del arreglo bidimencional


    ?>
</body>
</html>