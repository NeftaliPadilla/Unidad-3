<?php
$carpeta = "archivos/";

if(!empty($_FILES["archivo"]["name"])){
    $archivo = $_FILES["archivo"]["name"];
    $ruta_temporal = $_FILES["archivo"]["tmp_name"];
    $tipo_archivo = $_FILES["archivo"]["type"];
    if($tipo_archivo != "image/jpeg" && $tipo_archivo != "image/png" && $tipo_archivo != "image/gif"){
        echo "Error: solo se permiten imagenes jpg y png";
        return;
    }
    move_uploaded_file($ruta_temporal,$carpeta . $archivo);
        echo "Se ha enviado el archivo al servidor";
}else{
    echo "no se ha enviado nada";
    }
?>