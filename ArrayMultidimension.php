<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionales</title>
</head>
<body>

<h1>Juan Jesus Rivillas Canalejo</h1>
    <?php 
    
        $DatosPersonales = [  
            ["Nombre" => "Maria", "Apellido"=> "Hernandez", "Edad"=> 23, "Direccion"=> ["Localidad" => "Nerja",  "Provincia" => "Málaga"]], 
            ["Nombre" => "Elena", "Apellido"=> "Gomez", "Edad"=> 17, "Direccion"=> ["Localidad" => "Motril", "Provincia" => "Granada"]], 
            ["Nombre" => "Pedro", "Apellido"=> "Ruiz", "Edad"=> 17, "Direccion"=> ["Localidad" => "Torrox", "Provincia" => "Malaga"]]];

        foreach ($DatosPersonales as $dato) {
            if ($dato["Edad"] < 18) {
                echo "Nombre: " . $dato["Nombre"] ." " . $dato["Apellido"] . "<br>";
                echo "Edad: " . $dato["Edad"] . "<br>";
                echo "Localidad: " . $dato["Direccion"]["Localidad"] . "<br>";
                echo "<hr>";
            } 
        }
    ?>

    


</body>
</html>