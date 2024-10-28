<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<body>
    
<h1>Ejercicio 19: Funciones (5)</h1>
<hr>

<?php 

function mostrar_array($array){
    echo "<table>"; //Creamos una tabla
   foreach ($array as $key => $valor) { //Recorremos el array
       if ($valor > 50){
            echo "<tr><td>[$key]</td><td style='color: red;'>$valor</td></tr>"; //Si el valor es mayor que 50, lo mostramos en rojo
         } else {
            echo "<tr><td>[$key]</td><td style='color: green;'>$valor</td></tr>"; //Si el valor es menor o igual que 50, lo mostramos
       }
   }
    echo "</table>"; //Cerramos la tabla
} //Función para mostrar un array
function array_aleatorio($longitud, $min, $max){
    $array = array();
    for ($i=0; $i < $longitud; $i++) { 
        $array[] = rand($min, $max);
    }
    return $array;
} //Función para rellenar un array con números aleatorios entre el 1 y el 100

$array = array_aleatorio(20, 1, 100); //Rellenamos el array con 20 números aleatorios entre el 1 y el 100

function array_limite(&$array, $limite){
    foreach ($array as $key => $valor) { // Recorremos el array
        if ($valor > $limite) { // Si el valor es mayor que el límite
            unset($array[$key]); // Eliminamos los valores mayores que el límite
        }
    }
    // $array = array_values($array); //En caso de querer volver a reordenar los índices del array usariamos esta línea

} // Función para eliminar los valores mayores que un límite

echo "Array original: <br>";
mostrar_array($array); //Mostramos el array original

echo "<hr>Array con los valores mayores que 50 eliminados: <br>";
array_limite($array, 50); //Eliminamos los valores mayores que 50
mostrar_array($array); //Mostramos el array modificado
?>

<hr>

<h3>Juan Jesús Rivillas Canalejo - 2º DAW</h3>


</body>
</html>