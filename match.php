<?php

/**
 * Obtiene el nombre completo del país según lo especificado por parámetro.
 *
 * NOTA: Se utiliza 'switch'que es compatible con todas las versiones de PHP.
 *
 * 
 */

//Funcion para obtener un pais mediante su abreviacion con SwitchCase
// Un caso para cada abreviacion mucho codigo
function getCountryName($country){

    $name="";

    // switch case
    switch($country){
            //  Caso MX, si escribo MX me devuelve Mexico
        case "MX":
            $name="Mexico";
            break;

        case "COL":
            $name="Colombia";
            break;

        case "USA":
            $name="Unitates States of America";
            break;

        default:
            $name="No existe ese pais";
            break;

    }

    return $name;

}



// LLamo a mi funcion
//echo getCountryName("COL");
echo getCountry("COL");

// Pero hay una manera mas facil de hacer lo mismo con match. Mira la funcion de abajo
//Es la misma funcio solo que retornamos la funcion match() dentro de la funcion padre.
// Match se incorporo apartir de la version 8 de PHP

function getCountry($country){
    return match($country){
        "MX"=>"Mexico",
        "COL"=>"Colombia",
        "EUA"=>"Estados Unidos Americanos",
        default=>"Lo siento no existe ese pais"
    };
}




