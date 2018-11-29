<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Introduce tus datos<h1>

    <form action="<?php echo $_SERVER['PHP_SELF'];//hacer una peticion al servidor de la carga de la propia pagina?>" method="post">
    <table>
    <tr>
    <td class="izq">
    Login:</td><td class="der"><input type="text" name="login"></td></tr>
    <tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td></tr>
    <tr><td coldspan="2"><input type="submit" name="enviar" value="login"></td></tr></table>
</form>

<h2>Contenido de la WEB</h2>
<p>Este es el contenido de la WEB</p>

</body>
</html>