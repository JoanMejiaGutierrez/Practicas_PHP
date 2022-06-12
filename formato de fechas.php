<?php
$miFecha = date("d-m-Y H:i:s");//fecha y hora actual
$miFecha2 = date("d-m-Y H:i:s", mktime(16,30,29,12,24,1998));//fecha y hora especificada
echo "Fecha actual: ". $miFecha ."<br>Fecha especifica: ". $miFecha2;
?>