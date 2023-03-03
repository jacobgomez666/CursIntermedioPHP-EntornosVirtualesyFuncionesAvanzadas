<?php
$cajero =0;

// No podemos modificar una variable global desde un array Function
// En el ejemplo de abajo. Al inicio tenemos al cajero con 0.
// Despues tenenos un array function el cual aniade dinero al cajero
// Si ejecutamos la funcion y despues imprimimos a cajero seguimos teniendo 0.

$addCajero = fn($add)=>$cajero + $add;

     $addCajero(500);
echo $cajero;

echo "<br>";

// Pero si imprimimos la funcion addCajero si aniade los 500 pero
//solo en el ambito local del array function.

echo $addCajero(800);

// EJEMPLO 2. Filtrar las edades mayores o igual a 18 de un array.

$edades= [5,21,35,50,18,17];

// En la function($current). current es el iterador, puedes usar i o j s gustas
$mayoresDeEdad= array_filter($edades, function($current){
    return $current>=18;
});

print_r($mayoresDeEdad);

// Ejemplo 2. Pero con array functions
$mayorDeEdad = array_filter($edades, fn($i)=>$i>=18);


print_r($mayorDeEdad);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrows functions</title>
</head>
<body>

<h1>Arrows functions</h1>

<P>Las arrow functions son funciones que se pueden definir en una sola linea.
    Su sintaxis es muy parecida a los arrow functions de javascript, mientras que 
    su funcionamiento son muy parecidas a las lambdas de python.
</P>
<P>Fueron introducidas a partir de las versiones 7.4 de PHP como una sintaxis 
    mas consisa para las funciones anonimas.Estas tambien son implementadas usando
    la clase Closure.
</P>
    
</body>
</html>