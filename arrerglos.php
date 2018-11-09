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

    //ARRAY INDEXADOS
    $semana []="Lunes";
    $semana []="Martes";
    $semana []="Miercoles";
    $semana []="Jueves";
    

    /*$semana=array("Lunes", "Martes","Miercoles", "Jueves");
    echo $semana[2];*/

    //ARRAY ASOCIADOS

    $datos=array("Nombre"=>"Kris","Apellido"=>"Ortega", "Sexo"=>"Hombre");

    echo "<br>". $datos[Apellido] . "<br>";

    /*if (is_array($datos))//verificar si la variable es un arreglo
    {
        echo "Es un arreglo";
    }*/

    //RECORRER DENTRO DE UN ARRAY ASOCIATIVO

    $datos["Pais"]="Nicaragua";//agregar nuevos campos en un arreglo asociativo
    foreach ($datos as $clave=>$valor)
    {
        echo "A $clave le corresponde $valor <br>";
    }

    //ORDENAR ELEMENTOS DE UN ARREGLO 

    sort($semana);
    for ($i=0;$i<count ($semana);$i++)
    {
        echo $semana[$i] . "<br>";
    }
    ?>
</body>
</html>