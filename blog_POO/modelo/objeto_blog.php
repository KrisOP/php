<?php

class objeto_blog 
{
    private $id;
    private $titulo;
    private $fecha;
    private $comentario;
    private $imagen;

//metodos de acceso; getters proporciona cuales son losvalores de las propiedades y setters: establecer valores de las propiedades 
//ID
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)//$id en el parametro puede tener otro nombre yy no pasaria nada
    {
        $this->id=$id;
    }

//TITULO
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)//$id en el parametro puede tener otro nombre yy no pasaria nada
    {
        $this->titulo=$titulo;
    } 
//FECHA
    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)//$id en el parametro puede tener otro nombre yy no pasaria nada
    {
        $this->fecha=$fecha;
    }
//COMENTARIO
    public function getComentario()
    {
        return $this->comentarrio;
    }

    public function setComentario($comentario)//$id en el parametro puede tener otro nombre yy no pasaria nada
    {
        $this->comentario=$comentario;
    }

//IMAGEN

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)//$id en el parametro puede tener otro nombre yy no pasaria nada
    {
        $this->imagen=$imagen;
    }
}

?>
