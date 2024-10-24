<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>

<h1>Ejercicio 16: Funciones (2)</h1>
<hr>

<?php
    function array_aleatorio($tamaño, $min, $max) {
        $array = array();
        for ($i=0; $i < $tamaño; $i++) { 
            $array[$i] = rand($min, $max);
        }
        
        return $array;
    }

    function array_ej15($aleatorio){
        foreach ($aleatorio as $key => &$value) {
            if ($value % 2 == 0) {
                $aleatorio[$key] *= 2;
                unset($value);
            } else {
                $aleatorio[$key] += 1;
                unset($value);
            }
        }
        return $aleatorio;
    }

    $aleatorios = array_aleatorio(10, 1, 100);

    echo "<h2><u>Array original</u></h2>";
    foreach ($aleatorios as $key => $value) {
        if ($value % 2 == 0) {
            echo "<b style=\"color: green;\">[$key] $value</b><br>";
        } else {
            echo "<b style=\"color: red;\">[$key] $value</b><br>";
        }
    }

    $aleatorios = array_ej15($aleatorios);
    echo "<h2><u>Array modificado</u></h2>";
    foreach ($aleatorios as $key => $value) {
        if ($value % 2 == 0) {
            echo "<b style=\"color: green;\">[$key] $value</b><br>";
        } else {
            echo "<b style=\"color: red;\">[$key] $value</b><br>";
        }
    }
?>
    
<hr>
<h3>Juan Jesús Rivillas Canalejo - 2º Daw</h3>
</body>
</html>