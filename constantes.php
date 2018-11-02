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
    //Nombre en mayscula
    //sin $
    //usar la funcion define()
    //no se pueden redefinir
    //solo puede almacenar valores escalables


        define ("AUTOR", "Kris");//declaracion de una constante
        echo "La linea de esta instruccion es: " .__LINE__ ."<br>"; //PARA SABER EN QUE LINEA ESTA LA INSTRUCCION
        
        echo "Estamos trabajando con este fichero: ". __FILE__;//para saber que fichero es

    ?>
</body>
</html>