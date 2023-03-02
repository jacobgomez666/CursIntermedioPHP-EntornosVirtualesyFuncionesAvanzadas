<?php
// Ejemplo de funcion anonima guardada en una variable

$suma= function($n1, $n2){
 return $n1+$n2;
};

echo $suma(4,5);

// Ejemplo de una funcion anonima dentro de otra funcion


$numbers = [1,2,3,4];

//Arreglo multiplicado por 2
$numbersBy2 = array_map(function ($current){
    return $current *2;
},$numbers); //Arreglo que queremos recorrer ($numbers)

print_r($numbersBy2);

echo"<hr>";

// Otra forma de hacerlo

$numeros=[2,4,6,3];

$multiplicar =function($i){ // la variable i recibe los indices del array
    return $i * 2;
};  

$resultado = array_map($multiplicar, $numeros);

print_r($resultado);


// Usando la palabra reservada USE

$animal="Leon";  //Variable global

// Para llamar o usar una variable global en el ambito local 
// la llamamos con la palabra use()
$changeName = function() use($animal){
    echo $animal="Tigre";

};


$changeName();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Anonimas</title>
</head>
<body>

<h1>Funciones anonimas o Closures</h1>
<p>Las funciones anonimas o closures son funciones que podemos
    definir sin necesidad de asignarles un nombre. Y son muy
    similares a los callbacks de javascript
</p>

<p>Podemos guardar las funciones anonimas dentro de variables, pero su
    uso mas comun es pasarlas como parametros dentro de otra funcion. 
</p>
<P>Las funciones anonimas son una instancia de la clase Closure que tiene php por defecto </P>
    
<h2>Palabra reservada use</h2>
<p>Cuando queremos que una variable externa exista dentro de un Closure sin necesidad de 
    pasarla como parametro podemos usar la palabra reservada "use".
</p>

<P>EJEMPLO:   $outsideVariable ="Esta es una variable externa";</P>
<p>function my_Function() use ($outsideVariable){
    }</p>
</body>
</html>