<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include("auto.php");
        /*//Las clases es mejor el nombre la primera letra es mayuscula
        class Coche 
        {
            var $ruedas;//declarando atribustos de  la clase coche
            var $color;
            var $motor;

            function Coche ()//cuando un metodo dentro de una clase tenga el mismo nombre de la clase es un metodo constructor
            {
                $this-> ruedas=4;//referencia a la clase coche //En su estado inicial tiene 4 ruedas
                $this-> color="";
                $this-> motor=1600;
            }

            function arrancar ()//declarando funcionalidades
            {
                echo "El corre arranca";
            }

            function girar ()
            {
                echo "El coche gira";
            }
            function frenar ()
            {
                echo "El coche frena";
            }

            function establece_color($color_coche,$nombre_coche)
            {
                $this->color=$color_coche;
                echo "El color de ". $nombre_coche ." es: ". $this->color;
            }
        }*/

        $toyota = new Coche();//instancia perteneciente a la clase coche//es un objeto// lo que determine el constructor//dando un estado inicial
        $tesla = new Coche();
        $mercedes = new Camion();//un objeto de la clase camion
        //hacer que el tesla gire

       echo "El tesla tiene ". $tesla->get_ruedas() . " ruedas <br>"; //accediendo a la propiedad rueda usando un metodo getter
        
       echo "El mercedes tiene " .$mercedes->get_ruedas(). " ruedas";

       echo "El toyota tiene un motor de ". $mercedes->get_motor(). "  cc";
        
    ?>
</body>
</html>