<?php

    require ("config.php");

    class conexion
    {
        protected $conexion_db;

        public function conexion()
        {
            $this->conexion_db=new mysqli(BD_HOST,DB_USUARIO,DB_NOMBRE);

            if ($this->conexion_db->connect_errno)
            {
                echo "fallo al conectar a Mysql: ". $this->conexion_db->connect_error;
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET);//juego de caracteres para que podamos utilizar la ñ
        }
    }
?>