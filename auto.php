<?php
//Las clases es mejor el nombre la primera letra es mayuscula
        class Coche 
        {
            //utilizamos la propiedad "protected" para encapsular la propiedad ruedas y solo sea accesible desde la propia clase o desde clases a quien hereda; solo aqui se puede modificar
            protected $ruedas;//declarando atribustos de  la clase coche
            var $color;
            protected $motor;

            function Coche ()//cuando un metodo dentro de una clase tenga el mismo nombre de la clase es un metodo constructor
            {
                $this-> ruedas=4;//referencia a la clase coche //En su estado inicial tiene 4 ruedas
                $this-> color="";
                $this-> motor=1600;
            }

            function get_ruedas()//esta es una funcion getter, solamente por utiliazar return
            {
                return $this->ruedas;
            }

            function get_motor()
            {
                return $this->motor;
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

            function set_color($color_coche,$nombre_coche)//metodo set para modificar la propiedad
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
            
            function arrancar()
            {
                parent::arrancar();//Herencia> > Ejejcuta todo el codigo de la funcion de la clase padre y ademas ejecutar las instrucciones de la sub-clase
                echo "<br>Camion  Arranca";//ejecuta despues de haber corrido todo el codigo de la funcion arrancar de la clase padre
            }
        }
?>