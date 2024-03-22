<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafoli profecional</title>
    <link rel="stylesheet" href="portafolio.css">
</head>
<body>
    <div class="container">
        <section class="info">
            <div class="info-personal">
                <img src="foto.jpg" alt="" class="foto">
                <span>Brian Neftali Padilla Garcia</span>
                <p>Ingeniero en Software</p>
            </div>
            <nav>
                <ul id="menu">
                    <li><a href="?seccioni=inicio">Inicio</a></li>
                    <li><a href="?seccioni=sobre">Sobre mí</a></li>
                    <li><a href="?seccioni=servicios">Servicios</a></li>
                    <li><a href="?seccioni=portafolio">Portafolio</a></li>
                    <li><a href="?seccioni=contacto">Contacto</a></li>
                </ul>
            </nav>
        </section>
        <section class="portada" id="portadaContenido">
        <?php
            $seccioni = $_GET["seccioni"] ?? "inicio";

            switch($seccioni){
                case "inicio":
                    include "seccion/inicio.php";
                    break;
                case "sobre":
                    include "seccion/sobre.php";
                    break;  
                case "servicios":
                    include "seccion/servicios.php";
                    break;
                case "portafolio":
                    include "seccion/portafolio.php";
                    break;
                case "contacto":
                    include "seccion/contacto.php";
                    break;        
                default:
                    "<h1>No existe la seccion</h1>";
            }
        ?>
        </section>
    </div>
   
</body>
</html>
