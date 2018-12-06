<?php

//recibimos los datos de la imagen

$nombre_archivo=$_FILES['archivo']['name'];//guardamos el nombre de la imagen cargada en el formulario
$tipo_archivo=$_FILES['archivo']['type'];//guardamos el tipo de la imagen cargada en el formulario
$tamanio_archivo=$_FILES['archivo']['size'];//guardamos el tamanio de la imagen cargada en el formulario

echo $tipo_archivo=$_FILES['archivo']['type'];
if ($tamanio_archivo <=1000000)//si es menor de 1 millon de bytes (1 Mg)
{

    //if($tipo_archivo=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif")
    //{
        //ruta de la carpeta destinos en el servidor para guardarla
        $carpeta_destino=$_SERVER['DOCUMENT_ROOT']. '/practice_php/imagenes_servidor/cargas/';

        //movemos la imagen del directorio temporar al directorio escogido
        move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);//tmp_name seria la propiedad que devuelve el nombre de la carpeta temporal 
    //}
    //else
    //{
      //  echo " <br >el archivo NO es una imagen";
    //}
}
else{

    echo "el tamanio es demasiado grande";
}

require("datos_conexion.php");


$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

if (mysqli_connect_errno())//si existe algun error de conexion
{
    echo "Fallo al conectar con la BBDD";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

mysqli_set_charset($conexion,"utf8");//para que se reconozca los simbolos latinos como el acento, la e;e

$archivo_objetivo=fopen($carpeta_destino.$nombre_archivo,"r");//apuntamos al archivo que queremos abrir

$contenido=fread($archivo_objetivo,$tamanio_archivo);//bytes que forman el archivo objetivo

$contenido=addslashes($contenido);
fclose($archivo_objetivo);//cerrar el flujo de datos de fopen

$sql="INSERT INTO archivos (id,Nombre,Tipo,Contenido) VALUES (0,'$nombre_archivo','$tipo_archivo','$contenido')";



//$sql="UPDATE PRODUCTOS SET FOTO='$nombre_imagen' WHERE SECCION='DEPORTE'";
$resultado=mysqli_query($conexion,$sql);

if(mysqli_affected_rows($conexion)>0)
{
    echo "se ha hecho la insercion con exito";
}
else
{
    echo "no se ha podido insertar";
}

?>