<?php
  if (isset($_POST["button"]))
  {
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];

    calcular($operacion,$numero1,$numero2);
  }


function calcular($operacion,$numero1,$numero2)
    {
        if(!strcmp("Suma",$operacion))
        {
        echo "El resultado de la suma es: ". ($numero1+$numero2);
        }
        if(!strcmp("Resta",$operacion))
        {
        echo "El resultado de la resta es: ". ($numero1-$numero2);
        }

        if(!strcmp("Multiplicacion",$operacion))
        {
        echo "El resultado de la multiplicacion es: ". ($numero1*$numero2);
        }

        if(!strcmp("Division",$operacion))
        {
        echo "El resultado de la division es: ". ($numero1/$numero2);
        }

        if(!strcmp("Modulo",$operacion))
        {
        echo "El resultado del modulo es: ". ($numero1%$numero2);
        }

        if(!strcmp("Incremento",$operacion))
        {
            $numero1+2;
            $resultado=$numero1;

        echo "El resultado del incremento es: ". $resultado;
        }

        if(!strcmp("Decremento",$operacion))
        {
          $numero1--;
          $resultado=$numero1;

            echo "El resultado del decremento es: ". $resultado;
        }
  }
?>