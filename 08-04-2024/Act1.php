<?php
$carpeta = "archivos/";

if(!empty($_FILES["archivo"]["name"])){
    $archivo = $_FILES["archivo"]["name"];
    $ruta_temporal = $_FILES["archivo"]["tmp_name"];
    move_uploaded_file($ruta_temporal, $carpeta . $archivo);

    echo "<img src=\"$carpeta$archivo\">";
}else{
    echo "No se ha enviado nada";
}
?>
