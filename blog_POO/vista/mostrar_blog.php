<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php>
        include("../modelo/manejo_objetos.php");
        try
        {
            $miconexion=new PDO ('mysql:host=localhost; dbname=blogkop','root','12345678');
            $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $manejo_objetos=new manejo_objetos($miconexion);

            $tabla_blog=$manejo_objetos->getContenidoPorFecha();
            if (empty($tabla_blog))
            {
                echo "no hay entrada de blog aun";
            }else
            {
                foreach ($tabla_blog as $valor)//recorrer posicion a posicion en array
                {
                    echo "<h3>".$valor->getTitulo()."</h3>";
                    echo "<h4>".$valor->getFecha(). "</h4>";
                    echo "div style='width:400px'>";
                    echo $valor->getComentario . "</div>";

                    if ($valor->getImagen()!="")
                    {
                        echo "<img scr='../imagenes/";
                        echo $valor->getImagen(). "'width='300px' height='200px'/>";
                    }
                    echo "<hr/>";
                }

            }

        
        
        } catch (Exception  $e) 
        {
            die ("error:  ". $e->getMessage());
        }
        

    ?>

    <br/>

    <a href="Formulario.php"> Volver a la pagina de Insercion </a>
</body>
</html>