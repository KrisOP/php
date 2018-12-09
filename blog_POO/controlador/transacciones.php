<?php>
//interactua entre la vista y el modelo

include("../modelo/objeto_blog.php");
include("../modelo/manejo_objetos.php");

try {
    $miconexion=new PDO ('mysql:host=localhost; dbname=blogkop','root','12345678');
    $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        if ($_FILES['imagen']['error'])//si existe un error al dar subir una entrada. (especificamente al cargar una imagen)
        {
            switch($_FILES['imagen']['error'])
            {
                case 1: //error exceso de tamanio
                        echo "El tamanio del archivo excede al requerido";
                        break;
                case 2: //error tamanio archivo excede al establecido (2MB) en el formulario
                         echo "El tamanio del archivo debe ser de dos Megas o menos";
                         break;

                case 3: //el archivo no se ha subido completamente
                        echo "la subida del archivo fue interrumpida, INTENTAR DE NUEVO";
                        break;
                case 4: //no hay fichero
                        echo "No se ha enviado ningun archivo";
                        break;
            }
        }else
        {
            echo "Entrada realizada con exito";
            //$_FILES['imagen']['name] es el nombre de la imagen y a su vez lo que se almacenara en la base de datos
            if (isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))//si hay un nombre de imagen y no hay error 
            {
                $destino_de_ruta="imagenes/";//la primera parte de la ruta para buscar el nombre de la imagen en el directorio

                move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta . $_FILES['imagen']['name']);//mover del directorio temporaral al directorio deseado//VIDEO 90 MIN 16
                echo "El archivo ". $_FILES['imagen']['name']."se ha copiado en el directorio de imagenes";
            }else
            {
                echo "El archivo no se ha podido copiar al directorio imagenes";
            }
        }
    

    $manejo_objetos=new manejo_objetos ($miconexion);
    $blog=new objeto_blog();

    $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]),ENT_QUOTES));
    $blog->setFecha(Date("Y-m-d H:i:s"));
    $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]),ENT_QUOTES));
    $blog->setImagen($FILES["imagen"]["name"]);

    $manejo_objetos->insertarContenido($blog);

    echo "</br> entrada de blog con exito";


    } catch (Exception  $e) 
    {
        die ("error:  ". $e->getMessage());
    }

?>


