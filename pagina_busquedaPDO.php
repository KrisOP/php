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

    
        try{

            $base= new PDO ('mysql:host=localhost; dbname=pruebas','root','12345678');//instanciar la clase pdo
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
            $sql="SELECT NOMBREARTICULO,SECCION,PRECIO,PAIS FROM productos where NOMBREARTICULO=? ";
            
            
            $resultados=$base->prepare($sql);//devuelve un objeto de tipo PDO almacenado en resultado
            $resultados->execute(array("Destornillador"));//ejecutar consulta

            while ($registro=$resultados->fetch(PDO::FETCH_ASSOC))
            {
                echo "Nombre Articulo " . $registro['NOMBREARTICULO'] . "SECCION: ". $registro['SECCION'] . "PRECIO " . $registro['PRECIO'] . "PAIS" . $registro['PAIS'] . "<br>";
            }

            //cerrar el cursor
            $resultados->closeCursor();
        }catch (Excepcion $e)
        {
            die ('Error: ' . $e->GetMessage());
        } 
        finally
        {
            $base=null;//vaciar la memoria con los datos procesados. 
        } 

    ?>

</body>
</html>