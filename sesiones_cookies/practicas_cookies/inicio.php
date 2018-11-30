<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal</title>
</head>
<body>
    <?php

if (isset($_COOKIE["idioma_seleccionado"]))
{
    if($_COOKIE["idioma_seleccionado"]=="es")
    {
        header ("Location:espanol.php");
    }
    else if($_COOKIE["idioma_seleccionado"]=="en")
    {
        header ("Location:ingles.php");
    }
}
    ?>
    <h1>Elije un idioma</h1>

    <a href="creaCookie.php?idioma=es"> Idioma Espanol</a><br>
    <a href="creaCookie.php?idioma=en"> Idioma Ingles</a>
</body>
</html>