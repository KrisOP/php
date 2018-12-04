<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        try {
            $base=new PDO("mysql:host=localhost;dbname=pruebas","root","12345678");
           //$base=new PDO('mysql:host=localhost;dbname=pruebas','root','12345678');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
            $sql_total="select SECCION, NOMBREARTICULO, PRECIO, PAIS from productos where seccion='deporte'";//Con LIMIT 0,3 MUESTRAS SOLO LOS PRIMEROS 3 REGISTROS
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
            
            $resultado=$base->prepare($sql_total);

            $resultado->execute(array());


            $num_filas=$resultado->rowCount();//devuelve cuantos registros a partir de la consulta
            $total_paginas=ceil($num_filas/$tamanio_paginas);//redondea el resultado para saber cuantas paginas va a tener la paginacion
            
            echo "Numero de registros de la consulta: ".$num_filas ."<br>";
            echo "Mostramos ". $tamanio_paginas. "registros por paginas <br>";
            echo "Mostrando la pagina ". $pagina. " de ". $total_paginas."<br> <br>"; 
            
            $resultado->closeCursor();

            $sql_limite="select SECCION, NOMBREARTICULO, PRECIO, PAIS from productos where seccion='deporte' LIMIT $empezar_desde,3";//Con LIMIT 0,3 MUESTRAS SOLO LOS PRIMEROS 3 REGISTROS (del registro 0 al registro 3)
            
            $resultado=$base->prepare($sql_limite);

            $resultado->execute(array());

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC))
            {
                echo "Seccion: " .$registro["SECCION"]."Nombre Articulo: ". $registro["NOMBREARTICULO"]."Precio: ".$registro["PRECIO"]."Pais: ".$registro["PAIS"]."<br>";
            }

            

        } catch (Exception $e) {
            echo "Linea de Error". $e->getLine();
        }

        echo "<br><br>";
        //-----------------PAGINACION-----------------------------------//
        
        for($i=1;$i<=$total_paginas;$i++)
        {
            echo "<a href='?pagina=". $i . "'>" . $i ."</a>  ";//le pasamos como parametro en el enlace
        }

    ?>
</body>
</html>