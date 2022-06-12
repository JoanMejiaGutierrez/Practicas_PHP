<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <label for="">Ingrese su nombre</label>
        <input type="text" name="txtNombre">
        <br>
        <input type="submit" value="Enviar información por metodo POST">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>


<?php
if($_POST){
    $nuevoValorRecibido = $_POST['txtNombre'];
    echo "Hola ". $nuevoValorRecibido. ", Bievenido";
}
else{
    echo "Identificate!!";
}
?>