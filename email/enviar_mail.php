<?php

//para que funcione el envio de correos se debe configurar el servicio de correo electronico en el servidor
//

if($_POST["nombre"]=="" || $_POST["apellido"]=="" || $_POST["email"]=="" || $_POST["comentarios"]=="" || $_POST["destinatario"]=="" || $_POST["asunto"]=="")
{
    echo "todos los campos debene estar llenos";
    die();
}
$texto_mail=$_POST["comentarios"];
$destinatario=$_POST["email"];
$asunto=$_POST["asunto"];
//mejorar la transferencia de archivos entre diferentes paises, idiomas...
$header="MIME-Version: 1.0\r\n";//retorno de carro y una nueva linea
$header.="Content-type: text/html; charset=iso-8859-1\r\n";//el punto es para concatenar con lo que ya hay en el interior//
$header.="From: Prueba Kris < krisortega15@hotmail.es >\r\n";//mensaje de quien lo envia

$exito=mail($destinatario,$asunto,$texto_mail,$header);

if($exito)
{
    echo "Mensaje enviado con exito";
}
else {
    echo "ha habido un error";
}

?>