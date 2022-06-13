# Practicas_PHP
Formas de imprimir
* echo
* print_r
* print

Comentarios
//Esto es un comentario
//Se colocan con doble diagonal

/*
Esto es un comentario multilinea
*/




Metodo POST
Se crea un formulario con lo siguiente:
* action="<ruta, archivo, etc. de destino al pulsar el boton submit>"
* method="post"
* controles, por lo general de entrada, con name="<nombre>"
* un boton o input con type="submit"

en la parte de php:
* llegan los respectivos valores y se acceden por medio de $_POST['<nombre>']
* Por lo general se guardan estos valores en variables
Una vez hecho esto podemos hacer lo que sea con esos valores
NOTA: el nombre de cada valor de post tiene que coincidir con la propiedad name de los controles html.






Concatenar una cadena
"Hola " . $nombre . ", como estas?"
* Se usa el punto para concatenar


Warning: Undefined array key
Motivos:
* Aparece cuando no llega ningun valor al post con el nombre especificado en $_POST['']
-Solucion: comprobar que coincida el nombre de los controles con los valores POST.
* No se hizo ninguna petición POST
-Solucion: Hacer una peticion post o colocar un if($_POST) para detectar si se hizo esta peticion y poder usar los valores.








Metodo GET
El metodo GET contiene los parametros en su url a diferencia de post que los tiene ocultos













Separación del html con el php
Se pueden los archivos por separado con su resepeciva extensión
ejemplo en la implementación del metodo GET








Valor nulo
null





Variables
$edad = 25;//declaracion de variable por inferencia
echo $edad;//impresion de variable
$edad = 30;// cambio de valor de la variable
echo $edad;//impresion del nuevo valor de la variable



Constantes
define("edad", "25");  //se define por un metodo -> 2 argumentos: nombre y valor
echo edad;//impresion de nueva variable
edad = 30; //esta instruccion marcaria error ya que es una constante
NOTA: en las constantes no se antepone el signo $ para usarse


Concateniacion
con echo se pueden concatentar etiquetas de html.






Operadores relacionales
==
>=
<=
!=
>
<


Operadores logicos
AND
&&
OR
||
XOR
NOT
!







Switch
sintaxis:
switch(<variable>){
    case 1:
    ...
    break;
    case 2:
    ...
    break;
    case 3:
    ...
    break;
    default:
    ...
    break;
}




FOR
sintaxis:
for($i=0; <condición>; i++){
    ...
}




DO-WHILE
sintaxis:
do{
    ...
    i++
}
while(i<x)





WHILE
sintaxis:
while(i<x){
...
i++
}







Funciones
function <nombre>(){
    ...
}

function <nombre>($arg1, $arg2){
    ...
}


LLamar función
<nombre>();

<nombre>(valor1, valor2);




Valor por default en un argumento
function <nombre>($arg1=valor1, $arg2=valor2){
    ...
}

ej:
function MostrarMensaje($nombre="desconocido"){
    echo "Hola ". $nombre;
}






Numeros aleatorios
Función rand
radn()//sin argumentos
rand(<minimo>, <maximo>)//con argumentos de limite
ej: $miNumero = rand();
ej: $miNumero = rand(10, 60);


Convertir toda una cadena a mmayusculas
función strtoupper()
ej: miCadena.strtouppper()





Función de fecha Date()
date(<formato de fecha>, <tiempo>)
representaciones basicas:
d - dia: 01-31
m - mes: 01-12
M - mes: Jan-Dec
Y - año: 1998, 2003
y - año: 98, 03
a - am, pm
A - AM, PM
g - Hora: 1-12
H - Hora: 00-23
i - minutos: 00-59
s - segundos: 00-59
Para representar el tiempo actual se usa la funcion time()
Para representar una fecha especifica se usa la función mktime(<hora>, <min>,<seg>,<mes>,<dia>,<año>)
NOTA: si no se pone el argumento de tiempo por default es el tiempo actual.









Arreglos
$miArreglo = array("item1","item2", "item3);//crea arrego
print_r($miArreglo); //muestra indice y valor del arreglo en su formato
echo $miArreglo[2]; // muestra un valor especifico del arreglo en base al indice


Arreglo con indices personalizados
$miArreglo = array("a"=>"item1","b"=>"item2","c"=>"item3","d"=>"item4");//crea arreglo con indices customs
print_r($miArreglo);//muestra indice y valor del arreglo en su formato
echo $verduras["b"]; // muestra un valor especifico del arreglo en base al indice personalizado




recorrer valores del array
con indices normales se usa un for
for($indice=0;indice<limite; indice++){
    echo miArreglo[inidice];
}
Con indices personalizados se usa foreach
foreach($miArreglo as $indice=>$valor){
    echo $indice;// muesta el nombre de los indices
    echo miArreglo[indice];//muestra el valor por el indice
    echo $valor; //muestra el valor por la variable asociada
}
Como podemos ver hay 2 formas de mostrar el valor en el foreach.



Agregar valor al arreglo
array_push(<arreglo>, <nuevo valor>);