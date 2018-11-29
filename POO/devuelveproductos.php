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
        //***********UTILIZANDO FUNCIONES DE LIBRERIAS MYSQLI **************

        /*$resultado=$this->conexion_db->query('SELECT * FROM productos where PAIS="'.$dato.'"');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);//ARREGLO ASOCIATIVOS
        return $productos;*/


        //***********UTILIZANDO FUNCIONES DE LIBRERIAS PDO *********************

        $sql="SELECT * FROM productos WHERE PAIS = '".$dato."'";
        $sentencia=$this->conexion_db->prepare($sql);

        $sentencia->execute(array());

        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;

    }
}
?>