<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    
<h1>Ejercicio 18: Funciones (4)</h1>
<hr>

<?php 

//Creamos el array con las palabras
$palabras = array("Radar", "Animal", "Periquito", "Reconocer", "Aula");

//Función para comprobar si la palabra es palíndroma usando strrev
function palindromo1($palabra){
    $palabra = strtolower($palabra); //Convertimos la palabra a minúsculas
    $palabra = str_replace(" ", "", $palabra); //Eliminamos los espacios
    $palabraInvertida = strrev($palabra); //Invertimos la palabra
    
    if ($palabra == $palabraInvertida){ //Comparamos la palabra original con la invertida
        return "Si";
    } else {
        return "No";
    }
}

//Función para comprobar si la palabra es palíndroma sin usar strrev
function palindromo2($palabra){
    $palabra = strtolower($palabra); //Convertimos la palabra a minúsculas
    $palabra = str_replace(" ", "", $palabra); //Eliminamos los espacios
    $palabraInvertida = "";
    
    for ($i = strlen($palabra) - 1; $i >= 0; $i--){ //Recorremos la palabra de atrás hacia adelante
        $palabraInvertida .= $palabra[$i]; //Vamos añadiendo las letras al revés
    }
    
    if ($palabra == $palabraInvertida){ //Comparamos la palabra original con la invertida
        return "La palabra $palabra es palíndroma";
    } else {
        return "La palabra $palabra no es palíndroma";
    }
}


// Mostramos el resultado usando la función palindromo1
echo "<table>";
for ($i = 0; $i < count($palabras); $i++) {
    echo "<tr><td>¿Es ".$palabras[$i]." una palabra palíndromo ? </td>";
    if (palindromo1($palabras[$i]) == "Si"){
        echo "<td style=\"color: green;\">" .palindromo1($palabras[$i])."</td></tr>";
    } else {
        echo "<td style=\"color: red;\">" .palindromo1($palabras[$i])."</td></tr>";
    }
}
echo "</table> <hr>";

// Mostramos el resultado usando la función palindromo2
echo "<table>";
for ($i = 0; $i < count($palabras); $i++) {
    echo "<tr><td>¿Es ".$palabras[$i]." una palabra palíndromo ? </td>";
    if (palindromo1($palabras[$i]) == "Si"){
        echo "<td style=\"color: green;\">" .palindromo1($palabras[$i])."</td></tr>";
    } else {
        echo "<td style=\"color: red;\">" .palindromo1($palabras[$i])."</td></tr>";
    }
}
echo "</table> <br>";




?>

<hr>
<h3>Juan Jesús Rivillas Canalejo - 2º DAW</h3>


</body>
</html>