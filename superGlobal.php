<?php

function localScope(){
    echo $_GET["nombre"];
}

// NOTA: para pasar parametro por la URL mediante get
// lo hacemos asi: ?nombre=nombreApasar
localScope();   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Super Globales</title>
</head>
<body>
    <h1>Variable Super Global</h1>
    <p>Son las variables predefinidas por PHP, las cuales estan disponibles en cualquier parte del codigo, incluso sin necesidad de usar la palabra global</p>
    
    <h2>Algunas de estas super globales ya las conoces:</h2>
    <ul>
        <li>$GLOBALS</li>
        <li>$_SERVER</li>
        <li>$_GET</li>
        <li>$_POST</li>
        <li>$_FILES</li>
        <li>$_COOKIE</li>
        <li>$_SESSION</li>
        <li>$_REQUEST</li>
        <li>$_ENV</li>



    </ul>

    <p>Estas variables superglobales peuden ser accedidas desde cualquier lugar. Si podemos llamarlas dentro de una funcion o clase porque son superglobales</p>
</body>
</html>