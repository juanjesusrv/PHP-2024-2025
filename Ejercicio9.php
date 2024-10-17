<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>

    <?php 
    
    for ($i = 0; $i <= 20; $i++) {
        $a =  rand(1,40);
        $array[] =  $a;
    }

    for ($i = 0; $i <= 20; $i++) {
        if ($array[$i] % 4 == 0){
            $arr[] = $array[$i] * 2;
        } 
    }
    
    for ($i = 0; $i <= 20; $i++) {
        echo $array[$i],  "<br>";
    }

    for ($i = 0; $i <= 20; $i++) {
        echo $array[$i] * 2,  "<br>";
    }

    echo "El array de numeros completo es: <br>" , var_export($array),"<br>";
    echo "El array con los divisibles entre 4 multiplicado por 2 es: <br>" , var_export($arr)," <br>";

    
    ?>

</body>
</html>