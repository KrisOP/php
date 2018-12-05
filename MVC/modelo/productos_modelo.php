<?php

class Productos_model{

    private $db;//para almacenar la conexion
    private $productos;

    public function __construct(){

        require_once("conexion.php");
        $this->db=Conectar::conexion();//clase conectar y llamamos al metodo estatico conexion()
        $this->productos=array();//la variable producto es un array
    }

    public function get_productos()//metodo getter para devolver los productos
    {
        $consulta=$this->db->query("SELECT * FROM productos"); //this->db es la conexion//luego query para la ejecucion de una comsulta 
        
        while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){//PARA LEER ARREGLOS ASOCIATIVOS

            $this->productos[]=$filas;//almacenar cada uno de los registros al array productos
        }

        return $this->productos;
    }

}
?>