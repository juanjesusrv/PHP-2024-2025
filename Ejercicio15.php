<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1> Ejercicio 15 </h1>
    <hr>

    <?php

    $articulos = array(
        ["Teclado", 58],
        ["Raton", 32],
        ["Impresora", 185],
        ["Altavoz", 62],
        ["Auriculares", 36],
        ["Monitor", 102],
        ["Webcam", 47]
    );
    
    try {

        $indice = 0;
        
        if ($indice < 0 || $indice >= count($articulos)) {
            throw new Exception("El indice introducido no es valido.");
        } else {
            mostrarContenido($articulos, $indice);
        }
        
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    function mostrarContenido($array, $indice){
        echo "<h3>Articulo: " . $array[$indice][0] . "</h3>";
        echo "<h3>Precio: " . $array[$indice][1] . "</h3>";
    }
    
    ?>

    <hr>
    <h2><u>Juan Jesús Rivillas Canalejo - 2º DAW</u></h2>
</body>
</html>