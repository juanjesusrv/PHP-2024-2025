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

    if (empty($_GET['nombre']) || empty($_GET['apellido'])) {
        exit ("Falta el nombre o el apellido");
    } else {
        echo "Hola " . $_GET['nombre'] . " " . $_GET['apellido'];
    }


    ?>


</body>
</html>