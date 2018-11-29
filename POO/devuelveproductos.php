<?php
require "conexion.php";

//herencias de la clase conexion

class DevuelveProductos extends Conexion 
{
    public function DevuelveProductos () {

        //llamar al constructor de la clase padre
        parent::__construct();//ejecutar implicitamente el constructor padre 
    }

    public function get_productos($dato)
    {
        $resultado=$this->conexion_db->query('SELECT * FROM productos where PAIS="'.$dato.'"');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);//ARREGLO ASOCIATIVOS
        return $productos;
    }
}
?>