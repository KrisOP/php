<?php

class Personas_modelo{

    private $db;//para almacenar la conexion
    private $personas;

    public function __construct(){

        require_once("modelo/conexion.php");
        $this->db=Conectar::conexion();//clase conectar y llamamos al metodo estatico conexion()
        $this->personas=array();//la variable producto es un array
    }

    public function get_personas()//metodo getter para devolver los productos
    {
        require("paginacion.php");
        $consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $tamanio_paginas"); //this->db es la conexion//luego query para la ejecucion de una comsulta 
        
        while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){//PARA LEER ARREGLOS ASOCIATIVOS

            $this->personas[]=$filas;//almacenar cada uno de los registros al array productos
        }

        return $this->personas;
    }

}
?>