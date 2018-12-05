<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


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
      foreach ($matrizPersonas as $gente)://por cada objeto "gente" hay en el arreglo "registro" repetir el foreach?>

   	<tr>
      <td><?php echo $gente["id"]//mostrando cada campo del registro?></td>
      <td><?php echo $gente["nombre"]?></td>
      <td><?php echo $gente["apellido"]?></td>
      <td><?php echo $gente["direccion"]?></td>
 
      <td class="bot"><a href="borrar.php?id=<?php echo $gente["id"]//pasando por la url un id ("?id=php echo...")?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?id=<?php echo $gente["id"]?> & nom=<?php echo $gente["id"]?> & ape=<?php echo $gente["apellido"]?> & dir=<?php echo $gente["apellido"]?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
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
<?php
//-----------------PAGINACION-----------------------------------//
        
        /*for($i=1;$i<=$total_paginas;$i++)
        {
            echo "<a href='?pagina=". $i . "'>" . $i ."</a>  ";//le pasamos como parametro en el enlace
        }*/

  ?>
</table>    
</body>
</html>