<?php
require ("conexion.php");

//herencias de la clase conexion

class DevuelveProductos extends conexion 
{
    public function DevuelveProductos () {

        //llamar al constructor de la clase padre
        parent::__construct();//ejecutar implicitamente el constructor padre 
    }

    public function get_productos()
    {
        $resultado=$this->conexion_db->query('SELECT * FROM productos');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);//ARREGLO ASOCIATIVOS
        return $productos;
    }
}
?>