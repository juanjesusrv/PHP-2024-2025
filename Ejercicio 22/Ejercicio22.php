<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>
<body>

    <?php

    if (!isset($_GET['num1']) || !isset($_GET['num2'])) {
        exit ("Falta algún valor");

    } else if (is_numeric($_GET['num1']) == FALSE || is_numeric($_GET['num2']) == FALSE) {
        exit ("No has introducido un número");

    } else {
        echo "<table border='1'>";
        echo "<tr><td>" . $_GET['num1'] . " + " . $_GET['num2'] . "</td><td>" . ($_GET['num1'] + $_GET['num2']) . "</td></tr>";
        echo "<tr><td>" . $_GET['num1'] . " - " . $_GET['num2'] . "</td><td>" . ($_GET['num1'] - $_GET['num2']) . "</td></tr>";
        echo "<tr><td>" . $_GET['num1'] . " * " . $_GET['num2'] . "</td><td>" . ($_GET['num1'] * $_GET['num2']) . "</td></tr>";
        
        if ($_GET['num2'] == 0) {
            echo "<tr><td>" . $_GET['num1'] . " / " . $_GET['num2'] . "</td><td>No se puede dividir por 0</td></tr>";
        } else {
            echo "<tr><td>" . $_GET['num1'] . " / " . $_GET['num2'] . "</td><td>" . ($_GET['num1'] / $_GET['num2']) . "</td></tr>";
        }
        echo "</table>";

    }
    

    ?>
    
</body>
</html>