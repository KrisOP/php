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
//Para paginacion
$tamanio_paginas=3;//cuantos registros por pagina
            
if (isset($_GET["pagina"]))//se va ejecutar siempre y cuando le hayamos pasado pagina como parametro en la url//o sea link en la paginacion
{
        if ($_GET["pagina"]==1)
        {
            header("Location:index.php");
        }
        else
        {
            $pagina=$_GET["pagina"];
        }
}else
{
    $pagina=1;
}

//$pagina=1;//la pagina al cargar la primera vez sera la pagina 1

//para mostrar el inicio desde donde se va a tomar los registros para mostrarlos en la pagina
$empezar_desde=($pagina-1)*$tamanio_paginas;//al cargar la pagina por primera vez podemos utilizar esta variable en el LIMIT para hacer la consulta

$resultado=$base->prepare($sql_total);

$resultado->execute(array());


$num_filas=$resultado->rowCount();//devuelve cuantos registros a partir de la consulta
$total_paginas=ceil($num_filas/$tamanio_paginas);//redondea el resultado para saber cuantas paginas va a tener la paginacion


$registros=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);//ESTA LINEA ES COMO TENER LAS MISMAS DOS LINEAS ANTERIORES
if(isset($_POST["cr"]))//si se ha pulsado el boton cr
{
    $nombre=$_POST["Nom"];
    $apellido=$_POST["Ape"];
    $direccion=$_POST["Dir"];

    $sql="INSERT INTO datos_usuarios (nombre,apellido, direccion) VALUES (:nom, :ape, :dir)";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));
    header("Location:index.php");
}

?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
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
      <td class='bot'><a href="editar.php?id=<?php echo $gente->id?> & nom=<?php echo $gente->nombre?> & ape=<?php echo $gente->apellido?> & dir=<?php echo $gente->direccion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>  
  <?php

    endforeach;//cerrando el foreach. Usando esta nomenclatura facilita la concatenacion de html con php
  ?>

	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name='Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>