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
function palindromo1(array $palabras){

    echo "<table>";
    for ($i = 0; $i < count($palabras); $i++) {
        $palabras[$i] = strtolower($palabras[$i]); //Convertimos la palabra a minúsculas
        $palabras[$i] = str_replace(" ", "", $palabras[$i]); //Eliminamos los espacios
        $palabraInvertida[] = strrev($palabras[$i]); //Invertimos la palabra
    }

    for ($i = 0; $i < count($palabras); $i++) {
        echo "<tr><td>¿Es ".$palabras[$i]." una palabra palíndromo ? </td>";
        if ($palabras[$i] == $palabraInvertida[$i]){ //Comparamos la palabra original con la invertida
            echo "<td style=\"color: green;\">Si</td></tr>";
        } else {
            echo "<td style=\"color: red;\">No</td></tr>";
        }
    }

    echo "</table> <br>";
}

//Función para comprobar si la palabra es palíndroma sin usar strrev
function palindromo2(array $palabras){

    echo "<table>";
    for ($i = 0; $i < count($palabras); $i++) {
        $palabras[$i] = strtolower($palabras[$i]); //Convertimos la palabra a minúsculas
        $palabras[$i] = str_replace(" ", "", $palabras[$i]); //Eliminamos los espacios
        $aux = ""; // Inicializamos la variable auxiliar

        for ($j = strlen($palabras[$i]) - 1; $j >= 0; $j--) {
            $aux .= substr($palabras[$i], $j, 1); //Extraemos las letras y las añadimos a aux
        }

        $palabraInvertida[] = $aux; 
        $aux = ""; //Vaciamos la variable auxiliar
    }

    for ($i = 0; $i < count($palabras); $i++) {
        echo "<tr><td>¿Es ".$palabras[$i]." una palabra palíndromo ? </td>";
        if ($palabras[$i] == $palabraInvertida[$i]){ //Comparamos la palabra original con la invertida
            echo "<td style=\"color: green;\">Si</td></tr>";
        } else {
            echo "<td style=\"color: red;\">No</td></tr>";
        }
    }
}
// Mostramos el resultado usando la función palindromo1

palindromo1($palabras);

// Mostramos el resultado usando la función palindromo2

palindromo2($palabras);




?>

<hr>
<h3>Juan Jesús Rivillas Canalejo - 2º DAW</h3>


</body>
</html>