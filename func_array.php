<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones de arrays</title>
</head>
<body>
    <?php

    $array1 = ["perro", "gato", "loro", "musaraña", "cocodroli", "periquito"]; 
    
    list ($a, $b, $c, $d, $e, $f) = $array1;
    echo $c;
    echo "<hr>";
    
    $array2 = range(0, 10, 2);
    var_dump($array2);
    echo "<hr>";

    $array3 = in_array("periquito", $array1);
    echo json_encode($array3);
    echo "<hr>";

    $array4 = $array1;
    unset($array4[5]);
    var_export($array4);
    echo "<hr>";


    $array5 = $array4;
    $array5[5] = $array1[5];
    var_export($array5);
    echo "<hr>";


    shuffle($array1);
    echo var_export($array1);
    echo "<hr>";


    


    

    ?>
</body>
</html>