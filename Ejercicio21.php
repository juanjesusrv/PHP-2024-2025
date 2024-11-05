<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba del $_GET</title>
</head>
<body>
    <h1>Prueba del $_GET</h1>

    <?php

    if (empty($_GET['num1']) || empty($_GET['num2'])) {
        exit ("Falta algún valor");
    } else if (is_numeric($_GET['num1']) == FALSE || is_numeric($_GET['num2']) == FALSE) {
        exit ("No has introducido un número");

    } else {
        echo $_GET['num1'] +  $_GET['num2'];
    }

    //Para introducir los datos en la url se debe hacer de la siguiente manera:
    //http://localhost/Ejercicio21.php?num1=5&num2=6

    ?>


</body>
</html>