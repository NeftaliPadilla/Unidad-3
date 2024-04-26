<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi galería de imágenes</title>
    <style>
        body {
            margin: 0;
            padding: 0;
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
        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        #logo {
            width: 100px;
            height: auto;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: right;
        }
        nav ul li {
            display: inline;
            margin-left: 10px;
        }
        nav ul li a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }
        nav ul li a:hover {
            color: #555;
        }
        #gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 20px;
        }
        #gallery img {
            width: 100%;
            height: auto;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <div>
                <img id="logo" src="logo.png" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="upload.php">Subir imagen</a></li>
                    <?php
                    session_start();
                    if(isset($_SESSION['usuario'])){
                        echo "<li><a href='modificar_usuario.php'>Modificar usuario</a></li>";
                        echo "<li><a href='logout.php'>Cerrar sesión</a></li>";
                    } else {
                        echo "<li><a href='signup.php'>Registrar</a></li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
        <div id="gallery">
            <?php
            $ruta_imagenes = "imagenes/";
            $imagenes = opendir($ruta_imagenes);
            $hay_imagenes = false;
            if($imagenes){
                while($imagen = readdir($imagenes)){
                    if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
                        echo "<img src='$ruta_imagenes$imagen' onclick='mostrarInfo(\"$imagen\")'>";
                        $hay_imagenes = true;
                    } 
                }
                closedir($imagenes);
            } else {
                echo "Error: al cargar carpeta de imágenes";
            }
            if(!$hay_imagenes){
                echo "No hay imágenes aún. Sube la primera.";
            }
            ?>
        </div>
    </div>

    <script>
        function mostrarInfo(imagen) {
            window.location.href = "ver_usuario.php?imagen=" + imagen;
        }
    </script>
</body>
</html>
