<?php
if(isset($_COOKIE["mi_cookie"])){
    echo "Hola, " . $_COOKIE["mi_cookie"];
}else{
    echo "Nose a crado la cookie";
}
?>