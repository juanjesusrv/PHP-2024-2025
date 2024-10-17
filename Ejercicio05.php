<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php 
        $nombre = "Laura";
        $contrasenias = "aa12";

        switch(true) {
            case $nombre == "Julia" && $contrasenias == "aa11":
            case $nombre == "Laura" && $contrasenias == "aa12":
            case $nombre == "Pedro" && $contrasenias == "aa13":
            case $nombre == "Carlos" && $contrasenias == "aa14":  
                echo "Usuario autorizado. Hola, " . $nombre;
                break;
            default:
                echo "Usuario no autorizado";
                break;
        }
    ?>
</body>
</html>