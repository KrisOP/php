<?php
    try {
        $base= new PDO ('mysql:host=localhost;dbname=pruebas', 'root','12345678');
        $base->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exc("SET CHARACTER SET UTF8");  
    } catch (Exception $e) {
        die ('Error' .$e->getMessage());//cerrar la conexion y muestra el mensaje del error
        echo "Linea del eroor". $e->getLine();//muestra la linea en el codigo donde se encuentra el error
    }
?>