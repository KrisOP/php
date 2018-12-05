<?php

require_once("conexion.php");

$base=Conectar::conexion();
$tamanio_paginas=3;//cuantos registros por pagina
            
if (isset($_GET["pagina"]))//se va ejecutar siempre y cuando le hayamos pasado pagina como parametro en la url//o sea link en la paginacion
{
        if ($_GET["pagina"]==1)
        {
            header("Location:index.php");
        }
        else
        {
            $pagina=$_GET["pagina"];
        }
}else
{
    $pagina=1;
}

//$pagina=1;//la pagina al cargar la primera vez sera la pagina 1

//para mostrar el inicio desde donde se va a tomar los registros para mostrarlos en la pagina
$empezar_desde=($pagina-1)*$tamanio_paginas;//al cargar la pagina por primera vez podemos utilizar esta variable en el LIMIT para hacer la consulta
$sql_total="SELECT * FROM datos_usuarios";
$resultado=$base->prepare($sql_total);

$resultado->execute(array());

$num_filas=$resultado->rowCount();//devuelve cuantos registros a partir de la consulta
$total_paginas=ceil($num_filas/$tamanio_paginas);//redondea el resultado para saber cuantas paginas va a tener la paginacion


?>