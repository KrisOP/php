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
        $miConexion=mysqli_connect("localhost", "root","12345678","blogkop");

        //comprobar conexion

        if (!$miConexion)
        {
            echo "La conexion ha fallado: " . mysqli_error();
            exit();
        }

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

        $titulo=$_POST['campo_titulo'];
        //$fecha=date("Y-m-d H:i:s");//almacenando la fecha actual
        $comentario=$_POST['area_comentarios'];
        $imagen=$_FILES['imagen']['name'];
        echo $imagen ."<br><br>";
       // $miconsulta= "INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('" . $titulo . "','" . $fecha '" . $comentario . "','" . $imagen ."')";
        $miconsulta="INSERT INTO contenido (titulo,fecha,comentario,imagen) VALUES ('$titulo',NOW(),'$comentario','$imagen')";
        $resultado=mysqli_query($miConexion,$miconsulta);

        //cerramos la conexion

        mysqli_close($miConexion);

        echo "</br> se ha agragado el comentario con exito";
    ?>
</body>
</html>