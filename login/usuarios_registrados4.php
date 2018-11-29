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

    session_start();//renaurar sesion si ya se ha iniciado una. Si, es asi, se puede acceder al valor de la variable super globlar cuando se creo la sesion

    if(!isset($_SESSION["usuario"]))//si no hay algo almacenado en la variable superglobal
    {
        header("Location:login.php");//si no hay inicio de sesion al introducir la url de esta pagina, redirecciona a login.php
    }
    ?>
    <h1>Bienvenido Usuarios</h1>
    <p>Esta es la pagina4</p>

    <?php
    echo "Usuario: ". $_SESSION["usuario"];
    ?>
    <a href="usuarios_registrados1.php">Volver</a>
</body>
</html>