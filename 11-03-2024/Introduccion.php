<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //esto es un comentario
        #esto es otro comentario
        /*esto es un comentario
        de lineas multiples */

        $nombre = "brian";

        #echo "hola ".$nombre.", bienvenido "; //para concatenar mas texto con punto
        echo "<h1>Hola mundo!</h1>";
        function saludar($nombre){
            echo "<script>alert('Hola $nombre')</script>";
        }
        saludar($nombre);
    ?>
</body>
</html>