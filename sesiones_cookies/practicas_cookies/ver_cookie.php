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
        if (!$_COOKIE["idioma_seleccionado"])
        {
                header ("Location:inicio.php");//si no se ha creado la cookie ir a inicio.php
        }
        else if($_COOKIE["idioma_seleccionado"]=="es")
        {
            header ("Location:espanol.php");
        }
        else if($_COOKIE["idioma_seleccionado"]=="en")
        {
            header ("Location:ingles.php");
        }
    ?>
</body>
</html>