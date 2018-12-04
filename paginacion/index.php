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
           //$base=new PDO('mysql:host=localhost;dbname=pruebas','root','12345678');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
            $sql_total="select SECCION, NOMBREARTICULO, PRECIO, PAIS from productos where seccion='deporte' LIMIT 0,3";//MUESTRAS SOLO LOS PRIMEROS 3 REGISTROS

            $resultado=$base->prepare($sql_total);

            $resultado->execute(array());

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
            {
                echo "Seccion: " .$registro["SECCION"]."Nombre Articulo: ". $registro["NOMBREARTICULO"]."Precio: ".$registro["PRECIO"]."Pais: ".$registro["PAIS"]."<br>";
            }

            $resultado->closeCursor();

        } catch (Exception $e) {
            //throw $th;
            echo "Linea de Error". $e->getLine();
        }
    ?>
</body>
</html>