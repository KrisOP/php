<?php

    require "config.php";

    class Conexion
    {
        protected $conexion_db;

        public function Conexion()//metodo constructor
        {
            //$this->conexion_db=new mysqli('localhost','root', '12345678', 'pruebas');
            $this->conexion_db=new mysqli(DB_HOST,DB_USUARIO, DB_CONTRA, DB_NOMBRE);
            if ($this->conexion_db->connect_errno)//si existe un error
            {
                echo "fallo al conectar a Mysql: ". $this->conexion_db->connect_error;
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET);//juego de caracteres para que podamos utilizar la ñ
        }
    }
?>