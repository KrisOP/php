<?php
include ("conexion.php");

$id=$_GET["id"];

$base->query("DELETE FROM datos_usuarios WHERE id='$id'");//ejecutar una consulta

header("Location:index.php");
?>