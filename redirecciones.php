<?php

echo"Hola mundo";

//die(); //Mata el flujo de ejecucion. Hasta aqui se ejecute el codigo
// lo demas para abajo ya no se ejecutara
//header("location:https://platzi.com");

// exit() — Muestra un mensaje y finaliza el script actual


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecciones en PHP</title>
</head>
<body>

<h1>Redirecciones</h1>
<p>Ya sabes como redireccionar de una pagina a otra, como l veniamos haciendo con los formularios.</p>
    
<h2>Funcion header()</h2>
<p>En el model cliente-servidor es comun querer mandar informacion extra com (auntenticacion, control de cookies,
    control de cache etc.). Esto lo podemos hacer con la funcion header
    
</p>
<P>header ("location: https://www.platzi.com");</P>
<p>header ("location: index.php");</p>
<p>header ("location: blog/novedades.php");</p>

<p>exit() — Muestra un mensaje y finaliza el script actual

<p>die();  Mata el flujo de ejecucion. Hasta aqui se ejecute el codigo
lo demas para abajo ya no se ejecutara</p>
</p>



</body>
</html>