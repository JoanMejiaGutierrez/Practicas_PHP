<?php

//array con indice numerico(normal)
$frutas = array("Manzana", "Piña", "Durazno", "Fresa");
print_r($frutas);
echo "<br>". $frutas[2];
//array con indice personalizado
$verduras = array("p"=>"papa","z"=>"zanahoria","b"=>"brocoli","ch"=>"chayote");
echo "<br>";
print_r($verduras);
echo "<br>". $verduras["b"];

//recorrer arreglo por el valor asociado
echo "<br>";
foreach($frutas as $indice=>$valor){
    echo "<br>";
    echo $valor;
}

//recorrer arreglo por indice
echo "<br>";
foreach($frutas as $indice=>$valor){
    echo "<br>";
    echo $frutas[$indice];
}



echo "<br>";
foreach($verduras as $indice=>$valor){
    echo "<br>";
    echo $valor;
}

//recorrer arreglo por indice
echo "<br>";
foreach($verduras as $indice=>$valor){
    echo "<br>";
    echo $verduras[$indice];
}


//Muestra el indice del arreglo verduras
echo "<br>";
foreach($verduras as $indice=>$valor){
    echo "<br>";
    echo $indice;
}


echo "<br>";
echo "<br>";
$materias = array("Matematicas", "Español", "Quimica");
print_r($materias);
echo "<br>";
array_push($materias, "Fisica");//agrega nuevo elemento al arreglo
print_r($materias);
?>