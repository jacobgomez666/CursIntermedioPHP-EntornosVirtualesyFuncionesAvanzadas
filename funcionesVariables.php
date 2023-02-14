<!--Son parecidas a las variable variables pero aplicado a funciones
.Podemos llamar a una funcion a partir de cadenas de textos dinamicas.
  -->
  <!-- Podemos almacenar el nombre de una funcion en una
variable. Y llamar a la funcion mediante esa variable seguido de ().  -->

<!-- Ejemplo 1 -->

<?php
function saludar(){
    echo "Buenos Dias";
}

function comer(){
    echo "Estoy comiendo";
}

$callFunc="saludar";

$callFunc();

echo"<br>";

// Otro ejemplo

function dog(){
  echo"Woof";
}

function zorro(){
  echo"Zorro no te lo lleves";
}

$funcion="zorro";

$funcion();

// Sumando dos numeros

function suma($n1, $n2){
  echo $n1()+$n2();  //le ponemos () a los numeros porque estamos obteniendo 
                     // los numeros las funciones gettters
}

function getNum1(){
  return 5;
}
function getNum2(){
  return 7;
}

function getNum3(){
  return 3;
}

suma("getNum2", "getNum3"); //Funcion variable
