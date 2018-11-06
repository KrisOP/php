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

    $var1=1;
    //Practica del While (Bucle indeterminados)
    while ($var1<6)
    {
        echo "Estamos ejecutando el codigo del bucle while <br>";
        $var1++;
    }

    echo "<br> Hemos salido del bucle <br> <br>";

    //practica del do while (bucle indeterminados)
    do 
    {
        echo "Estamos en el do While <br>";
        $var1--; 

    }while($var1>1);


    //Practica del for (bucle determinado)
    
    echo "<br> <br> Inicio del ciclo FOR <br>";

    for ($i=0;$i<=10;$i++)
    {
        if ($i==3)
        {
            echo "Division por 3 no se vera<br>";
            continue;//cuando la i valga 3 no se ejecutara la instruccion y continuara con el ciclo
        }
        echo "9 X $i = ". 9*$i. "<br>";


    }
    ?>

</body>
</html>