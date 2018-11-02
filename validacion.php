<?php
  if (isset($_POST["enviando"]))//comprobar si hemos pulsado el boton enviar
  {
      $usuario=$_POST["nombre_usuario"];//almacenando lo que el usuario intodujo en el cuadro de texto ($_POST es una variable super global)
      $edad=$_POST["edad_usuario"];//almacenar lo que se introdujo en el input edad
      
      if ($usuario=="Juan")
      {
        echo "<p class='validado'>puedes entrar ". $usuario ."</p>";
      }
      else
      {
        echo "<p class='no_validado'>No puedes entrar ".$usuario . "</p>";
      }
    }
?>
