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
        if (isset($_POST["enviar"]))//si hemos presionado el boton enviar
        {
                try {
                
                    $base=new PDO("mysql:host=localhost;dbname=pruebas","root","12345678");
                    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $sql="SELECT * FROM usuarios WHERE usuarios=:login AND password=:password";

                    $resultado=$base->prepare($sql);
                    $login=htmlentities (addslashes($_POST["login"]));
                    $password=htmlentities (addslashes($_POST["password"]));//convierte cualquier simbolo en html _ " ' -----addslashes escapa cualquier caracter extra;o para evitar la inyeccion sql
                    $resultado->bindValue(":login",$login);//bindValue para que las variables de los otros formulario correspondada a lo que tengamos en los marcadores 
                    $resultado->bindValue(":password",$password);
                    $resultado->execute();

                    $numero_registro=$resultado->rowCount();//verificar si existe el usuario. rowCount() devuelve el numero de registros al ejecutar una consulta

                    if ($numero_registro!=0)
                    {
                        session_start();//iniciar una sesion para el usuario logueado
                        $_SESSION["usuario"]=$_POST["login"];//almacenar en la variable superglobal el login del usuario//
                        header("location:usuarios_registrados1.php");
                    }
                    else{
                            header("location:login.php");//redirigir a la pagina de login
                    }
                } catch (Exception $e) {
                    die ("Error".$e->getMessage());
                }
        }
?>

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