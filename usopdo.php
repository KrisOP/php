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

    	//excepcion es un fallo en tiempo de ejecucion. Todo esta bien, pero hay errores no de tipo sintaxis. Entonces se crea un objeto fallo. Bloque de codigos try catch (intentar ejecutar condigo, pero en caso de algun fallo, hacer lo que se pide en el fallo; catch. Y finally, tanto haya entrado en el try o en catch ejecutar lo que este en finally

    	try{

    		$base= new PDO ('mysql:host=localhost; dbname=pruebas','root','12345678');//instanciar la clase pdo
    		echo "conexion exitosa";

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