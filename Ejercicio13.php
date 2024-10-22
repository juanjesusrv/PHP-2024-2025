<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>

    <style>
        #a {
            color: red;
        }
        #b {
            color: blue;
        }
    </style>
    
</head>
<body>

    <h1>Ejercicio 13 – Arrays <i>(18/10/2024)</i></h1>
    <hr>
    <?php 
    

   

    $numcolor = range(1, 20, 1);
    shuffle($numcolor);

    for ($i = 15; $i < 20; $i++) {    
        unset( $numcolor[$i]);
    }

    echo "<table>";
    echo "<tr>";
    for ($i = 0; $i < 15; $i++){
        echo "<td>" . $i + 1 . "</td>";
    }
    echo "</tr>";

    echo "<tr>";
    for ($i = 0 ; $i < 15; $i++) {
        if ($numcolor[$i] %2== 0) {
            echo "<td id=a>". $numcolor[$i] ."</td>";
        } else{
            echo "<td id=b>". $numcolor[$i] ."</td>";
        }
    }
    echo "</tr>";

    echo "</table>";
    
    ?>

    <hr>
    <h2>Juan Jesús Rivillas Canalejo - 2º DAW</h2>
    
</body>
</html>