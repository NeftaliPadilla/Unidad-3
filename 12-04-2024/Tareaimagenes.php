<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi galeria de imagenes</title>
    <style>
        .image-container{
            display: inline-block;
            margin: 10px;
        }
        .image-container img{
            max-width: 150px;
            max-height: 150px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Mi galeria de imagenes</h1>
    <?php
    $ruta_imagenes = "archivos/";
    $imagenes = opendir($ruta_imagenes);
    while($imagen = readdir($imagenes)){
        if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
            echo "<div class='image-container'>";
            echo "<a href='$ruta_imagenes$imagen' target='_blank'>";
            echo "<img src='$ruta_imagenes$imagen' alt='Imagen'>";
            echo "</a>";
            echo "</div>";
        } 
    }
    closedir($imagenes);
    ?>
</body>
</html>
