<?php

// FUNCION ARRAY() COMO PARAMETRO OPCIONAL 

function sumarEdades($edades= array(13,17,35)){
return array_sum($edades);//array_sum() funcion que suma elementos de un arreglo
}

//echo sumarEdades($edades);

// incluso puedo cambiar los elementos del array (ARGUMENTOS)
echo sumarEdades(array(3,3,3));

echo"<br>";
// Funcion multiplicar con Trailing comas

function multiplicar(
    $n1=8,
    $n2=4,
    $n3=2,
){
    return $n1+$n2+$n3;
}

echo multiplicar();

// Ejemplo con una clase

class coches{} 

function recibirClase( $clase = new coches){

    echo $clase::class;

}

recibirClase();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argumentos a profundidad</title>
</head>
<body>
    <h1>Argumentos a profundidad</h1>

    <h2>Arrays como parametro opcional en una funcion</h2>
    <P>Eexiste la funcionalidad de poder colocar arrays como parametros en una funcioon, 
    asi mismo pasar un array como argumentos.</P>
    <h2>Trailing comas</h2>
    <p>Los trailing commas son comas que van el apartado de los parametros de tu funcion, lo que destaca es que estos parametros pueden terminar con coma sin marcar error. Esto se encuentra en muchos lenguajes

</p>

<P>Recuerda que algunos de los argumentos que vimos solo funcciona apartir de la version 8. </P>
</body>
</html>