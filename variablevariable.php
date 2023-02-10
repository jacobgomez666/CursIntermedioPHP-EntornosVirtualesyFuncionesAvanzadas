
<?php
$nombre= "Carlitos";
$edad=11;
$comidafav="Lasania con berejena";

$variable ="edad"; // le pasamps la vraibale edad a la variable

echo $$variable; //imprime 11 la edad

// Y as puedes probar dentro de la variable poner comidaFav
// te imprimira comida fav.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VariableVariables</title>
</head>
<body>
    <h1>Variable variables</h1>
    <P>Una variable variable es una variable dentro de otra variable</P>
    
</body>
</html>