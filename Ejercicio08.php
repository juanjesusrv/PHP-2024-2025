<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php 
    
        $array_numerico = [11,20,7,2,35,12,51,1];
        $provincias = array("pr1"=>"Almería",
                            "pr2"=>"Cádiz",
                            "pr3"=>"Córdoba",
                            "pr4"=>"Granada",
                            "pr5"=>"Huelva",
                            "pr6"=>"Jaén",
                            "pr7"=>"Málaga",
                            "pr8"=>"Sevilla");

        echo "<div style=\"float: left;margin-right: 100px;\">";
        echo "El contenido del array numerico es:" . "<br>";
        foreach ($array_numerico as $a) {
            echo $a . "<br>";
        }
        echo "</div>";
        
        echo "<div>";
        echo "El nombre del índice y el contenido del array provincia es: ";
        echo "<br>";
        foreach ($provincias as $key => $value) {
            
            echo $key .": ". $value ."<br>";
        }
        echo "</div>";
        echo "<br>";

        echo "<div style=\"float: left;left; width: 45%;\">";
        echo "Los números pares más cercanos al contenido inicial son: ";
        echo "<br>";
        foreach ($array_numerico as $a) {
            if($a%2== 0) {
                echo $a + 2 ."<br>";
            } else {
                echo $a + 1 ."<br>";
            }
        }
        echo "</div>";
        echo "<br>"; echo "<br>";

        echo "<div style=\"float: left; width: 45%;\">";
        echo "El contenido modificado del array provincia es:  ";
        echo "<br>";
        foreach ($provincias as $key => &$value) {
            $key = "Provincia de ";
            echo $key ."". $value ."<br>";
        }
        echo "<br>";
        echo "</div>";

    
    ?>
</body>
</html>