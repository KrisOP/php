<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$usuario= $_POST["usu"];
	$contrasenia= $_POST["contra"];
	
	$cifrado=password_hash ($contrasenia,PASSWORD_DEFAULT);//FUNCION PARA ENCRIPTAR CONTRASENIA//DEFAULT GENERA LA SAL AUTOMATICA
				
	try{

		$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '12345678');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");		
		
		
		$sql="INSERT INTO USUARIOS (USUARIOS, PASSWORD) VALUES (:usu, :contra)";
		
		$resultado=$base->prepare($sql);		
		
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$cifrado));		
		
		
		echo "Registro insertado";
		
		$resultado->closeCursor();

	}catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}finally{
		
		$base=null;
		
		
	}

?>
</body>
</html>