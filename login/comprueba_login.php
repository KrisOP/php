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
            echo "<h2>Adelante</h2>";
        }
        else{
                header("location:login.php");//redirigir a la pagina de login
        }
    } catch (Exception $e) {
        die ("Error".$e->getMessage());
    }
    ?>
</body>
</html>