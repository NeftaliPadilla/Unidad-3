<?php
$nombre_cookie = "mi_cookie";
$valor_cookie = "Brian";
$tiempo_cookie = time() + (1*60);
setcookie($nombre_cookie, $valor_cookie, $tiempo_cookie);
if(isset($_COOKIE["mi_cookie"])){
    echo "Se creo correctamente";
}else{
    echo "No se pudo crear";
}
?>