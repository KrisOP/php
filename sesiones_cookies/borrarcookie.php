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
        //se creara y guardara la cookie en el disco de la pc
        //time() carga la hora actual y al establecer un tiempo con valor negativo se cierra o destruye la cookie creada
        //la cookie se guardara en el directorio que hemos asignado
        setcookie("prueba","Esta es la informacion de nuestra primera cookie",time()-1,"/practice_php/sesiones_cookies/Zona_de_Contenido/");//Nombre de la cookie es prueba, y el valor o descripcion

    ?>
</body>
</html>