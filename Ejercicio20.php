<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>
<body>
    
<h1>Ejercicio 20: Funciones (6)</h1>
<hr>

<?php

// Creamos las variables necesarias
$texto = "Todos los dias de la semana voy al IES Jorge Guillén porque estoy en segundo curso del ciclo formativo DAW";
$palabra = "DAW";
$palprohibidas = ["segundo","daw", "ies"];

// Llamamos a la función
func_texto($texto, $palabra, $palprohibidas); 

// Con esta función realizamos todas las operaciones que se nos piden en el enunciado
function func_texto($texto, $palabra, $palprohibidas){
    // $texto es una cadena de texto
    // $palabra es la palabra que queremos buscar en el texto
    // $palprohibidas es un array con las palabras que no queremos que aparezcan en el texto

    //Calcular y mostrar la longitud del texto
    echo "La longitud del texto: " . strlen($texto) . "<br>";

    //Calcular y mostrar el número de palabras del texto
    echo "La cantidad de palabras: " . str_word_count($texto) . "<br>";

    //Contar el número de veces que aparece una palabra en concreto ($palabra) en el texto.
    // Usar la función contarpalabra();
    echo "La palabra $palabra aparece " . contarpalabra($texto, $palabra) . " vez <br>";

    //Reemplazar las palabras prohibidas por (*) del mismo tamaño de la palabra.
    //Por ejemplo si "IES" es una palabra prohibida y la cadena es "Estoy en el IES Jorge Guillén"
    //, el resultado debe ser "Estoy en el *** Jorge Guillén"
    echo "Texto con palabras prohibidas reemplazadas por asteriscos: " . reemplazar($texto, $palprohibidas) . "<br>";
} 

// Con esta función contamos las veces que aparece una palabra en un texto
function contarpalabra($texto, $palabra){

    return substr_count($texto, $palabra);
} 

// Con esta función reemplazamos las palabras prohibidas por asteriscos (la misma cantidad de asteriscos que letras tenga la palabra prohibida)
function reemplazar($texto, $palprohibidas){
    foreach ($palprohibidas as $palabra) { //Recorremos el array de palabras prohibidas

        //Sustituimos la palabra prohibida por asteriscos
        $texto = str_ireplace($palabra, str_repeat("*", strlen($palabra)), $texto); 
    }
    
    return $texto;
} 

?>

<hr>

<h3>Juan Jesús Rivillas Canalejo - 2º DAW</h3>


</body>
</html>