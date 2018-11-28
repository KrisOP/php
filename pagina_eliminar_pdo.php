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

    $n_art=$_POST["n_art"];
    
        try{

            $base= new PDO ('mysql:host=localhost; dbname=pruebas','root','12345678');//instanciar la clase pdo
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//decir a la BD que tome como propiedades las excepciones que sera capaz de crearlas en el caso que se produzca un error. Y podemos rescatar propiedades y metodos del objeto error//Osea podemos ver el tipo de error para identificarlo y solucionarlo facilmente
            $base->exec("SET CHARACTER SET utf8");
            //$sql="SELECT NOMBREARTICULO,SECCION,PRECIO,PAIS FROM productos where SECCION= :SECC AND PAIS= :PORIG";//uso del marcador
            //$sql="INSERT INTO productos (SECCION, NOMBREARTICULO,FECHA,PAIS,PRECIO) VALUES (:seccion,:n_art,:fecha,:pais,:precio)";//HACIENDO USO DE LOSS MARCADORES
            $sql="DELETE FROM productos WHERE NOMBREARTICULO =:n_art";
            $resultados=$base->prepare($sql);//devuelve un objeto de tipo PDO almacenado en resultado
            //$resultados->execute(array(":SECC"=>$seccion, ":PORIG"=>$pais));//ejecutar consulta y pasarle al marcador lo almacenado en $buscar
            //$resultados->execute(array(":seccion"=>$seccion,":n_art"=>$n_art,":fecha"=>$fecha,":pais"=>$pais,"precio"=>$precio));//asociar marcadores con variables
            $resultados->execute(array(":n_art"=>$n_art));
            /* while ($registro=$resultados->fetch(PDO::FETCH_ASSOC))
            {
                echo "Nombre Articulo " . $registro['NOMBREARTICULO'] . "SECCION: ". $registro['SECCION'] . "PRECIO " . $registro['PRECIO'] . "PAIS" . $registro['PAIS'] . "<br>";
            }*/
            echo "Registros Eliminados";
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