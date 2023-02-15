<?php
// A estas alturas sabes como funciona esta funcion. Hay una variable global hola
// La funcion saludando tiene un parametro saludar y devuelme ese mismo parametro
// al ejecutarse. Despues llamamos a la funcion y le pasamos el argumento al parametro. 

$saludar ="Buenos dias";

function saludando($saludar){
return $saludar;

}

echo saludando($saludar);
echo"<br>";




// Ahora veamos la misma funcion pero con Parametros Por Referencia.

$saludo ="Buenos dias";

function saludando2(&$tarde){ //tarde es la referencia con signo ampersan
return $tarde="Buenas tardes";

}

echo saludando2($saludo); // al llamar a la funcion con la global $saludo nos 
                          // imprime Buenas tardes. Porque modificamos la variable inicial
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros por referencia</title>
</head>
<body>
    <h1>Parametros por referencia</h1>

<P>En donde guarda mi computadora las variables?</P>
<P>Ya sabes que al declarar una variable, estan se almacenan en algun lugar en la memoria.
    Pero como sabe PHP en que lugar de la memoria se guardo esa variable?. Pues lo sabe porque guarda la referencia de ese lugar.
    Una variable se guarda en una casilla de la memoria con un nombre de referencia.

</P>
<p>Por ejemplo al guardar una variable $edad=14; en una casilla llamada marianas donde marianas es la referencia por que es el nombre que me dice en que lugar de la memoria se guardo mi variable edad. Haciendo referencia a ese espacio donde esta guardado.</p>
<p>La referencia marianas es un ejemplo, pero normalmente los lenguajes de alto nivel usan nombres de referencia como 0x052683234. Parecido como cuando guardabamos variables en lenguaje ensablador . Ademas creo que ya habias visto ese nombre de referencia varias veces. Ahora ya sabes que es la referencia de una variable guardada</p>    
<h2>Ahora que es el paso de parametros por referencia</h2>
<p>Paso por referencia es darle la referencia del lugar donde esta guardado la variable que queros usar o llamar. Por ejemplo pasarle la referencia marianas o 0x08836. 
A esto se le conoce como parametro por referencia facil crack. </p>

<P>NOTA: Mire los ejemplos en la logica de php de arriba de este documento</P>
</body>
</html>