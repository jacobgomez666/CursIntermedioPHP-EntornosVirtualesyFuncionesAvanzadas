<?php

function espaciado(){
    echo"<br><hr>";
}

function espacio(){
    echo"<br><br>";
}

// Constante con define()

define("MICHI", "Soy Mr. Michi ");
define('michi', "Soy michi enano");

// Constante usando la funcion const
const PI=3.1416;





echo MICHI;
espacio();

echo michi;


espaciado();

echo PI;

// Las constantes definidas si pueden ir dentro de condicionales
//Pero const no.
$decision = true;
if ($decision){
define ("BLOCK_CONSTANT", "Soy una constante definida con define()");
echo BLOCK_CONSTANT;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes en php</title>
</head>
<body>
    <h1> Constantes en php</h1>
    <p>Una constante es un valor que nuna cambia. Podemos definir una constante con 
        con define() y const. Asi mismo al declarar las constantes no hace falta poner el signo $ como lo hacemos 
        al decllarar variables.
    </p>

    <h2>Ejemplo de constantes</h2>
    <p>define("MICHI", "Soy Mr. Michi ");</p>
    
    <p>const PI=3.1416;</p>
    <p>Las constantes definidas con define() si pueden ir dentro de condicionales, en cambio las constantes con const no estan permitidas dentto de un condicional.</p>
    <h2>CONSTANTES PREDEFINIDAS</h2>
    <p>Asi mismo hay constantes predefinidas por PHP, entre algunas de estas estan: E_ERROR, PHP_VERSION</p>
<h2>CONSTANTES MAGICAS</h2>
<ul>
    <li>__LINE__: Nos indica en que línea está actualmente el script.</li>
    <li>__FILE__: Nos indica cual es el archivo que se está ejecutando actualmente.</li>
    <li>__DIR__: Nos brinda la dirección del archivo del cual es llamada.</li>
    <li>ClassName::class: Nos brinda el nombre completo de una clase.</li>
</ul>




</body>
</html>