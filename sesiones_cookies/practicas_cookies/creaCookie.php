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

        setcookie("idioma_seleccionado",$_GET["idioma"],time()+86400);//el $_GET["idioma] se va aguardar lo que se envia como parametro en inicio.php
        header ("Location:ver_cookie.php");
    ?>
</body>
</html>