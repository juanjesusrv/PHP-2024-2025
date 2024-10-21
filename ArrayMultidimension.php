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

        /**
        *
        *$DatosPersonales = [  
        *    ["Nombre" => "Maria", "Apellido"=> "Hernandez", "Edad"=> 23, "Direccion"=> ["Localidad" => "Nerja",  "Provincia" => "Málaga"]], 
        *    ["Nombre" => "Elena", "Apellido"=> "Gomez", "Edad"=> 17, "Direccion"=> ["Localidad" => "Motril", "Provincia" => "Granada"]], 
        *    ["Nombre" => "Pedro", "Apellido"=> "Ruiz", "Edad"=> 17, "Direccion"=> ["Localidad" => "Torrox", "Provincia" => "Malaga"]]];
        *
        *foreach ($DatosPersonales as $dato) {
        *    if ($dato["Edad"] < 18) {
        *        echo "Nombre: " . $dato["Nombre"] ." " . $dato["Apellido"] . "<br>";
        *        echo "Edad: " . $dato["Edad"] . "<br>";
        *        echo "Localidad: " . $dato["Direccion"]["Localidad"] . "<br>";
        *        echo "<hr>";
        *    } 
        *}
        *
        */

        $arrayanimal1 = [ 
                        "Ave"    =>["Paloma", "Águila", "Periquito"],
                        "Reptil" =>["Boa", "Culebra", "Lagarto", "Camaleon"]
                       ];
        
        $arrayanimal2 = [ 
                        "Ave"    =>["Paloma", "Águila", "Periquito"],
                        "Reptil" =>["Boa", "Culebra", "Lagarto", "Camaleon"],
                        "Pez"    =>[
                                     "Mamifero" => ["Delfin", "ballena"],
                                     "Otro"     => ["Boqueron", "Tiburon", "Atun"]
                                   ]
                       ];

        # Sacar todo el contenido del array 1
        echo var_export( $arrayanimal1, true );
        echo "<br><br>";

        # Sacar todo el contenido del array 2
        echo var_export( $arrayanimal2, true );
        echo "<hr><br>";

        # Sacar el contenido de la clave ave del array 1
        echo "<h2>Contar el numero de elementos de animal 1 y animal 2 </h2>";
        echo count($arrayanimal1);
        echo "<br>";
        echo count($arrayanimal2);
        echo "<br>";
        echo count($arrayanimal1, COUNT_RECURSIVE);
        echo "<br>";
        echo count($arrayanimal2, COUNT_RECURSIVE);
        echo "<hr><br>";


        # Contar el numero de animales con foreach
        $contador = 0;
        foreach ($arrayanimal1 as $animal) {
            foreach($animal as $especie => $value){
                $contador++;
            } 
        }

        echo "El numero de animales es: " . $contador;
        echo "<hr><br>";

        # Contar el numero de animales con foreach
        $contador = 0;
        foreach ($arrayanimal2 as $animal) {
            echo "El nº de elementos del array" . $animal. "es: " . count($animal) . "<br>";
        }

       
    ?>

    


</body>
</html>