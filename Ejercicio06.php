<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
        <?php  
            $num = 5;
            $resultado = 1;

            if ($num >= 1) {
                for ($i = $num; $i >= 1; $i--) {
                    $resultado = $resultado * $i;
                }

                if (is_int($resultado)) {
                    echo "El número es: " . $num . "<br>";
                    echo "El factorial es: ". $resultado;
                } else {
                    echo "El número es: " . $num . "<br>";
                    echo "No existe el factorial";
                }
            } else {
                echo "El número es: " . $num . "<br>";
                echo "No existe el factorial";
            } 
        ?>
</body>
</html>