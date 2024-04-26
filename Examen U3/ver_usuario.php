<?php
session_start();

// Verificamos si se ha pasado el nombre de la imagen por GET
if(isset($_GET['imagen'])){
    $imagen = $_GET['imagen'];
    $ruta_imagen = "imagenes/$imagen";
    $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "Anónimo";
    $fecha_subida = date("d/m/Y", filemtime($ruta_imagen));
} else {
    // Si no se ha pasado el nombre de la imagen, redirigir a la página principal
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la imagen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        #container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        #image-container {
            text-align: center;
            margin-bottom: 20px;
        }
        #image-container img {
            max-width: 100%;
            max-height: 400px;
        }
        #user-info {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="image-container">
            <img src="<?php echo $ruta_imagen; ?>" alt="Imagen">
        </div>
        <div id="user-info">
            <p>Usuario: <?php echo $usuario; ?></p>
            <p>Fecha de subida: <?php echo $fecha_subida; ?></p>
        </div>
    </div>
</body>
</html>
