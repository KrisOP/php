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
   
        echo "Este es el primer mensaje <br>";
        echo "Este es el segundo mensaje <br>";

        require ("proporciona_datos.php");//incluir un archivo externo

        //Llamada a la funcion
        dameDatos();
        

    ?>
</body>
</html>