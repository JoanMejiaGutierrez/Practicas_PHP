<?php
if ($_GET){
    $nombre = $_GET['txtNombre'];
    echo "Hola ". $nombre . ". Bienvenido";
}
else{
    echo "Identifiquese!!!!";
}
?>