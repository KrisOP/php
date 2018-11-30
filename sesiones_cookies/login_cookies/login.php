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

 $autenticar=false;

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

                    if ($numero_registro!=0)//se ha logueado exitosamente
                    {
                        $autenticar=true;

                        if(isset($_POST["recordar"])) //si ha activado la casilla recordar
                        {
                            setcookie("nombre_usuario",$_POST["login"],time()+86400);
                        }
                    }
                    else{
                        echo "Error. Usuario o Contrasela incorrectas"; 
                        //header("location:login.php");//redirigir a la pagina de login
                    }
                } catch (Exception $e) {
                    die ("Error".$e->getMessage());
                }
        }
?>
<?php
    if ($autenticar==false)//si no se ha loguedado
    {
        if (!isset($_COOKIE["nombre_usuario"]))
        {
            include("formulario_login.php");
        }
        
    }
?>
    
<h2>Contenido de la WEB</h2>
<p>Este es el contenido de la WEB</p>

<?php

if($autenticar==true || isset($_COOKIE["nombre_usuario"]))//si existe la cookie que muestre el nuevo contenido, o las siguientes paginas
{
    include ("zona_registrados.html");
}
?>

</body>
</html>