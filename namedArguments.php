<?php

// Funcion normal con tres parametros en ordden como lo trabajamos

function getPersonInfo($name, $age, $country){
 echo"Tengo la informacion de $name y tiene $age anios y vive en $country";

}

// Llamamos a la funcion y le pasamos los parametros en orden
getPersonInfo("jacob", 35, "Mexico");

echo"<hr>";

// Ahora llamamos a la funcion con los named Arguments
getPersonInfo(
    age:14,
    country:"Mexico",
    name:"Jacob"
);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Named Arguments</title>
</head>
<body>

<h1>Named Arguments</h1>

<P>Algunos named Arguments solo estan disponibles apartir de la version 8 de PHP.
    Recuerda migrar de php 7 a 8 en xammp.
</P>
    
</body>
</html>