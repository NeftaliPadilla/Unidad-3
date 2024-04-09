<?php
$carpeta = "archivos/";

if(!empty($_FILES["archivo"]["name"])){
    $archivo = $_FILES["archivo"]["name"];
    $ruta_temporal = $_FILES["archivo"]["tmp_name"];
    move_uploaded_file($ruta_temporal,$carpeta . $archivo);

    echo "Se ha enviado el archivo al servidor";
}
else{
    echo "no se ha enviado nada";
}
?>