<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi galeria de imagenes</title>
</head>
<body>
    <h1>Mi galeria de imagenes</h1>
    <?php
    $ruta_imagenes = "archivos/";
    $imagenes = opendir($ruta_imagenes);
    while($imagen = readdir($imagenes)){
        if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
            echo "<img src= '$ruta_imagenes$imagen'>";
        } 
    }
    closedir($imagenes);
    ?>
</body>
</html>