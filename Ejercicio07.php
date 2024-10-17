<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1> Ejercicio 7: Estructuras control de flujo</h1>
    
        <?php 
        $var = 10;
        echo "<table border=\"1\">";
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 10; $j++) {
                echo "<td>";
                    echo $var;
                "</td>";

                $var = $var + 10;
            }
            "</tr>";
            
        }

        "</table>"
        ?>
        
</body>
</html>