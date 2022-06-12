<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opearaciones</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Primer Numero</label>
        <input type="number" name="txtNum1" id="">
        <label for="">Segundo Numero</label>
        <input type="number" name="txtNum2" id="">
        <br>
        <button type="submit">Sumar</button>
    </form>
</body>
</html>




<?php
if($_POST)
{
    if (!$_POST['txtNum1'] or !$_POST['txtNum2']){
        $num1 = 0;
        $num2 = 0;
    }
    else
    {
        $num1 = $_POST['txtNum1'];
        $num2 = $_POST['txtNum2'];
    }
    $resultado = $num1 + $num2;
    echo "El resultado de la suma es ". $resultado;
}
?>