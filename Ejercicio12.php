<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    
    <?php 

    $contPares = 0;
    $contImpares = 0;
    $contAux = 0;

    for ($i = 0; $i < 20; $i++) {
        $arrayAleatorios[] = random_int(1,50);
        if ($arrayAleatorios[$i] % 2 == 0){
            $arrayPares[] = $arrayAleatorios[$i];
            $contPares++;
        } else {
            $arrayImpares[] = $arrayAleatorios[$i];
            $contImpares++;
        }
    }
    
    var_dump($arrayAleatorios);
    echo "<hr>";


    echo "<table>";
    echo "Array original: ";
    echo "<tr>";
    for ($i = 0; $i < 20; $i++){
        echo "<td>" . $i . "</td>";
    }
    echo "</tr>";

    echo "<tr>";
    for ($i = 0; $i < 20; $i++) {
        echo "<td>". $arrayAleatorios[$i] ."</td>";
    }
    echo "</tr>";

    echo "</table>";
    echo "<br>";

    echo "<table>";
    echo "Array resultante con los pares al principio y los impares al final: ";
    echo "<tr>";
    for ($i = 0; $i < 20; $i++){
        echo "<td>" . $i . "</td>";
    }
    echo "</tr>";


    echo "<tr>";
    
    for ($i = 0; $i < 20; $i++) {
        if($contPares > 0){
            $arrayAleatorios[$i] = $arrayPares[$i];
            $contPares--;
        } else {
            $arrayAleatorios[$i] = $arrayImpares[$contAux];
            if ($contAux < $contImpares){
                $contAux++;
            }
        }
    }

    for ($i = 0; $i < 20; $i++)
    {
        echo "<td>". $arrayAleatorios[$i] . "</td>";
    }

    echo "</tr>";

    echo "</table>";

    ?>

</body>
</html>