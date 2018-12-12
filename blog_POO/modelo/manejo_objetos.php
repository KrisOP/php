<?php

include_once("objeto_blog.php");

    class manejo_objetos
    {
        private $conexion;

        //el constructor es lo que se ejecuta cuando instanciamos la clase en otro archivo
        public function __construct($conexion)//no es la misma que private $conexion
        {
            $this->setConexion($conexion);
        }

        public function setConexion(PDO $conexion)
        {
            $this->conexion=$conexion;
        }

        //para obtener las entradas del blog

        public function getContenidoPorFecha()
        {
            $matriz=array();
            $contador=0;
            $resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY fecha");
            
            while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
            {
                $blog= new objeto_blog();

                $blog->setId($registro["id"]);
                $blog->setTitulo($registro["titulo"]);
                $blog->setFecha($registro["fecha"]);
                $blog->setComentario($registro["Comentario"]);
                $blog->setImagen($registro["Imagen"]);

                $matriz[$contador]=$blog;
                $contador++;
            }
        
            return $matriz;
        }

        public function insertarContenido(objeto_blog $blog)//$blog es una variable de tipo objeto_blog
        {
            //$sql="INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('".$blog->getTitulo(). "','".$blog->getFecha(). "','".$blog->getComentario(). "','".$blog->getImagen(). "')";
            $sql="INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen) VALUES ('".$blog->getTitulo(). "','".$blog->getFecha(). "','".$blog->getComentario(). "','".$blog->getImagen(). "')";
            
            $this->conexion->exec($sql);
        }
    }
    

?>