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
