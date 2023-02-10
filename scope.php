<?php

$outside_varible="Soy una variable global";

function funcionX(){

    global $outside_varible;
    echo $outside_varible;
}

funcionX();

//Esta funcion me imprime todas las variables globales que existen en mi codigo
// print_r($GLOBALS); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope de PHP</title>
</head>
<body>

<h1>Scope de PHP- Variales locales y globales</h1>
<p>Como ya habimos visto anteriormente, en el scope de php tenemos
    variables globales y locales. Las globales las que se de claran fuera de una funcion o clase.
Estas se pueden acceder desde cualquier lugar del scope de php.
</p>

<h2>Global variable</h2>
<p>Esta variables globales se pueden acceder incluso si estan en otro archivo.php separado. Ya sabes usando require para unir los dos arvhivos.php</p>
<h2>Local variable</h2>
<p>Por otro lado las variables locales son las que se declaran dentro de una funcion o clase y solo se puyeden acceder estando dentro de la clase o fucnion. </p>

<P>NOTA: La unica forma de accer a una variabke global dentro de una funcion es llamando con global seguido de la variable global ya declarada.</P>
<P>Me refiero a que si ya creastes e inicializastes una variable global al inicio del documento. Creas una funcion y la llamas con global$variableALlamar</P>

    
</body>
</html>