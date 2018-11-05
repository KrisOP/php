<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $num=rand(); //almacenar un numero randon

    $num1=rand(10,50);//seleccnonar un numero aleatorio entre el rango de 10 y 50

    $num2=pow(5,3);//5 numero base y 3 es el exponente

    $num3=5;
    $num3+=2;
    echo "el numero es $num <br>";

    echo "El numero de 10 a 50>> $num1 <br>";

    echo "utilizando la funcion pow  $num2 <br>";

    echo "El valor de la variable 3 es: $num3 <br>";

    //CASTING EXPLICITO

    $num4="5";

    $resultado=(int) $num1; //almacenar el valor en entero

    
    ?>
</body>
</html>