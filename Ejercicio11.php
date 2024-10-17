<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>

    <?php 
    

    $ordenadores = [ "Portatil" => [
                      ["Marca" => "HP", "Procesador" => "INTEL i5", "Precio" => 623],
                      ["Marca" => "LENOVO", "Procesador" => "INTEL i7", "Precio" => 924]
                   ],"Sobremesa" =>[
                      ["Marca" => "HP", "Procesador" => "AMD Ryzen 5", "Monitor" => "LG 23.8p", "Precio" => 710],
                      ["Marca" => "ACER", "Procesador" => "INTEL i5", "Monitor" => "MSI 27p", "Precio" => 685]]] ;
    
                     
    
        var_dump($ordenadores);
        echo "<hr>";
        
        foreach ($ordenadores as $ordenador) {
            foreach($ordenador as $componente => $value){
                foreach($value as $key => $valueNew){
                    echo $key . ": " . $valueNew . "<br>";
                }
                echo "<hr>";
            }
        }

    $ordenadores["Portatil"][] = ["Marca" => "LENOVO", "Procesador"=> "Intel i5", "Precio" => 503];
    $ordenadores["Sobremesa"][] = ["Marca" => "LENOVO", "Procesador"=> "Intel i5", "Monitor" => "ASUS" ,"Precio" => 503];

    echo "<br><br><br><br>";


    foreach ($ordenadores as $ordenador) {
        foreach($ordenador as $componente => $value){
            foreach($value as $key => $valueNew){
                echo $key . ": " . $valueNew . "<br>";
            }
            echo "<hr>";
        }
    }
    ?>

</body>
</html>