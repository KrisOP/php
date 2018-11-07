<?php
//Las clases es mejor el nombre la primera letra es mayuscula
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
        }

        //------------------UNA CLASE PARECIDA PERO CON ATRIBUTOS DISTINTOS pero utilizando herencia---------------------------------------------------------

        class Camion extends Coche //HERENCIA: Creando la clase camion pero heredando de la clase Coche
        {
            function Camion ()//cuando un metodo dentro de una clase tenga el mismo nombre de la clase es un metodo constructor
            {
                $this-> ruedas=8;//referencia a la clase coche //En su estado inicial tiene 4 ruedas
                $this-> color="gris";
                $this-> motor=2500;
            }        
        }
?>