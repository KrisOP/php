<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Introduce tus datos</h1>
        <!--//hacer una peticion al servidor de la carga de la propia pagina-->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
        <table>
        <tr>
        <td class="izq">
        Login:</td><td class="der"><input type="text" name="login"></td></tr>
        <tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td></tr>
        <tr><td>Recordar: </td><td><input type="checkbox" name="recordar" id="recordar"><label for="recordar"></label></td></tr>
        <tr><td coldspan="2"><input type="submit" name="enviar" value="login"></td></tr></table>
    </form>
    
</body>
</html>