<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
<?php
include("conexion.php");

if (!isset($_POST["bot_actualizar"]))//si no se ha pulsado el boton actualizar ejecutar
{
  $id=$_GET["id"];
  $nombre=$_GET["nom"];
  $apellido=$_GET["ape"];
  $direccion=$_GET["dir"];
}else//cuando si se presione el boton actualizar tomar los datos del formulario (aca, se entiende que los campos han sido modificados)
{
  $id=$_POST["id"];
  $nombre=$_POST["nom"];
  $apellido=$_POST["ape"];
  $direccion=$_POST["dir"];

  $sql="UPDATE datos_usuarios SET Nombre=:miNom, Apellido=:miApe, Direccion=:miDir  WHERE id=:miId";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":miId"=>$id, ":miNom"=>$nombre, ":miApe"=>$apellido, ":miDir"=>$direccion));//asignando a cada parametro el valor de las variables
  header("Location:index.php");
}
?>
<h1>ACTUALIZAR</h1>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];//la informacion que introduzcamos la va enviar a la pagina donde nos encontramos?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td></label>
      <input type="text" name="ape" id="ape" value="<?php echo $apellido?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $direccion?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>