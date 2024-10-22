<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>Ejercicio 14: </h1>
    
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

    echo "<hr>";
    echo var_export($articulos, true);
    echo "<hr>";

    echo "<table>";
    echo "<tr><td>Artículo</td><td>Precio</td></tr>";
    for ($i = 0; $i < count($articulos); $i++){
        echo "<tr><td>" . $articulos[$i][0] . "</td>";
        echo "<td>" . $articulos[$i][1] . "</td></tr>";
    }
    echo "</table> <br>";

    $art_original = array_merge($articulos); 

    for ($i = 0; $i < count($articulos); $i++) {
        if ($articulos[$i][1] > 50) {
            array_splice($articulos, $i, 1);
            $i--;
        }
    }

    echo "<table>";
    echo "<tr><td>Artículo</td><td>Precio</td></tr>";
    for ($i = 0; $i < count($articulos); $i++){
        echo "<tr><td>" . $articulos[$i][0] . "</td>";
        echo "<td>" . $articulos[$i][1] . "</td></tr>";
    }
    echo "</table> <br>";

    $art_actual = array_merge($art_original);

    echo "<table>";
    echo "<tr><td>Artículo</td><td>Precio</td></tr>";
    for ($i = 0; $i < count($art_actual); $i++){
        echo "<tr><td>" . $art_actual[$i][0] . "</td>";
        if ($art_actual[$i][1] < 50) {
            echo "<td>" . $art_actual[$i][1]*1.15 . "</td></tr>";
        } else {
            echo "<td>" . $art_actual[$i][1] . "</td></tr>";
        }
    }
    echo "</table> <br>";

    echo var_export($art_actual);
    ?>
    <hr>
    <h2><u>Juan Jesús Rivillas Canalejo - 2º DAW</u></h2>
</body>
</html>