<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php
include("conexion.php");

//$conexion=$base->query("SELECT * FROM datos_usuarios");
//$registros =$conexion->fetchAll(PDO::FETCH_OBJ);//OBTENER TODAS LAS FILAS RESTANTE DEL CONJUNTO DE RESULTADOS//OBJ MANEJAR UN ARRAY DE OBJETOS

$registros=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);//ESTA LINEA ES COMO TENER LAS MISMAS DOS LINEAS ANTERIORES


?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
		
    <?php
      foreach ($registros as $gente)://por cada objeto "gente" hay en el arreglo "registro" repetir el foreach?>

   	<tr>
      <td><?php echo $gente->id//mostrando cada campo del registro?></td>
      <td><?php echo $gente->nombre?></td>
      <td><?php echo $gente->apellido?></td>
      <td><?php echo $gente->direccion?></td>
 
      <td class="bot"><a href="borrar.php?id=<?php echo $gente->id//pasando por la url un id ("?id=php echo...")?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>  
  <?php

    endforeach;//cerrando el foreach. Usando esta nomenclatura facilita la concatenacion de html con php
  ?>

	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>

<p>&nbsp;</p>
</body>
</html>