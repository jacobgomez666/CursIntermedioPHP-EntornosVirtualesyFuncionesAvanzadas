<?php

// Ejemplo de declaracion de tipo escalar en nuestra funcion de calcular area de traingulo
// Es simplemente el tipado fuerte que java tiene

function calcAreaTriangulo(int $base, int $altura, string $nombre){

    return "Hola $nombre, el area del traingulo es:".($base*$altura)/2;

}

echo calcAreaTriangulo(3,3, "Rafik");




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaraciones de tipo escalar</title>
</head>
<body>

<h1>QUE SON LAS DECLARACIONES DE TIPO ESCALAR?</h1>
    <P>Las declaraciones de tipo escalar son de dos tipos: coercitivo (por defecto) y estricto. Ahora se pueden forzar los siguientes tipos para parámetros (tanto coercitiva como estrictamente): cadenas de caracteres (string), números enteros ( int ), números decimales (float), y booleanos ( bool ).
</P>
<p>Podriamos decir que es como el tipado fuerte de java, nos fuerza a definir los tipos de variables a usar</p>
<P>En otras palabras, podemos tipar nuestras funciones. Este comportamiento, 
    por defecto, es de tipo coercitivo (opcional), pero podemos hacer que sean
    obligatorios poniendo la palabra reservada "declare" al inicio de nuestro script.
</P>
</body>
</html>