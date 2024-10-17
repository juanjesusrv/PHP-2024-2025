<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <?php 
        for ($i = 0; $i < 15; $i++) {
            $num[] = rand(1,50);
        }

        echo "<table style=\"text-align: center; \">";
        echo "<th style=\"
    width: 100px;
\"> Numero </th> <th style=\"
    width: 100px;
    border-left: 1px black solid;
    border-right: 1px black solid;
\"> Cuadros </th> <th style=\"
    width: 100px;
\"> Cubos </th>";
        for($i = 0; $i < 15; $i++){
            echo "<tr>";
                echo "<td>";
                    echo $num[$i] . "<br>";
                echo "</td>";
                echo "<td>";
                    $num_cuadrado[] = $num[$i] * $num[$i];
                    echo $num_cuadrado[$i] . "<br>";
                echo "</td>";
                echo "<td>";
                    $num_cubo[] = $num[$i] * $num[$i] * $num[$i];
                    echo $num_cubo[$i] . "<br>";
                echo "</td>"; 
        }        
    
    
    
    ?>
</body>
</html>