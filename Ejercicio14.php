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
        "Teclado", 58,
        "Raton", 32,
        "Impresora", 185,
        "Altavoz", 62,
        "Auriculares", 36,
        "Monitor", 102,
        "Webcam", 47
    );

    echo "<hr>";
    echo var_export($articulos, true);
    echo "<hr>";

    echo "<table>";
    for ($i = 0; $i < count($articulos); $i++){
        if ($i %2 == 0){
            echo "<tr><td>" . $articulos[$i] . "</td>";
        } else{
                echo "<td>". $articulos[$i] ."</td></tr>";
        }
    }

    echo "</table> <br>";

    $art_original = array_merge($articulos); 
    
    echo "<table>";
    for ($i = 0; $i < count($art_original); $i++){
        if ($i %2 == 0){
            echo "<tr><td>" . $art_original[$i] . "</td>";
        } else{
                echo "<td>". $art_original[$i] ."</td></tr>";
        }
    }

    echo "</table> <br>";

    for ($i = 1; $i < count($articulos); $i += 2) {
        if ($articulos[$i] > 50) {
            array_splice($articulos, $i - 1, 2);
            $i -= 2;
        }
    }

    echo "<table>";
    for ($i = 0; $i < count($articulos); $i++){
        if ($i %2 == 0){
            echo "<tr><td>" . $articulos[$i] . "</td>";
        } else{
                echo "<td>". $articulos[$i] ."</td></tr>";
        }
    }

    echo "</table> <br>";
    for ($i = 1; $i < count($articulos); $i += 2) {
        $articulos[$i] = $articulos[$i] * 1.15;
    }

    $art_actual = array_merge($art_original);

    echo "<table>";
    for ($i = 0; $i < count($art_actual); $i++){
        if ($i == 0){
            echo "<tr><td>" . $art_actual[$i] . "</td>";    
        }
        elseif($i % 2 != 0){
            if ($art_actual[$i] < 50) {
                $art_actual[$i] = $art_actual[$i] * 1.15;
                echo "<td>" . $art_actual[$i] . "</td></tr>"; 
            } else {
                echo "<td>". $art_actual[$i] ."</td></tr>";
            }
        } else{
                echo "<tr><td>". $art_actual[$i] ."</td>";
        }
    }
    echo "</table> <br>";

    echo var_export($art_actual);
    ?>
    <hr>
    <h2><u>Juan Jesús Rivillas Canalejo - 2º DAW</u></h2>
</body>
</html>