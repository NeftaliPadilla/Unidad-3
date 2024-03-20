<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <nav>
        <ul>
            <li><a href="?seccion=inicio">Inicio</a></li>
            <li><a href="?seccion=acerca">Acerca de</a></li>
            <li><a href="?seccion=contacto">Contacto</a></li>
        </ul>
    </nav>
    <section>
        <?php
            $seccion = $_GET["seccion"] ?? "inicio";

            switch($seccion){
                case "inicio":
                    include "secciones/portada.php";
                    break;
                case "acerca":
                    include "secciones/acerca.php";
                    break;  
                case "contacto":
                    include "secciones/contacto.php";
                    break;
                default:
                    "<h1>No existe la seccion</h1>";
            }
        ?>
    </section>
    <footer>
        <h2>Pie de pagina</h2>
    </footer>
</body>
</html>