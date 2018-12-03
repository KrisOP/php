<?php
    try {
        $base= new PDO ('mysql:host=localhost;dbname=pruebas', 'root','12345678');
       //$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");  
    } catch (Exception $e) {
        die ('Error' .$e->getMessage());//cerrar la conexion y muestra el mensaje del error
        echo "Linea del error". $e->getLine();//muestra la linea en el codigo donde se encuentra el error
    }
?>