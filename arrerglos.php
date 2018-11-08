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
   /* $semana []="Lunes";
    $semana []="Martes";
    $semana []="Miercoles";
    */

    $semana=array("Lunes", "Martes","Miercoles", "Jueves");
    echo $semana[2];

    //ARRAY ASOCIADOS

    $datos=array("Nombre"=>"Kris","Apellido"=>"Ortega", "Sexo"=>"Hombre");

    echo "<br>". $datos[Apellido];
    ?>
</body>
</html>