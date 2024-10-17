<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>

<?php 

    $array_ejemplo = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");   
    $asociativo = array("so1"=>"Window10", "so2"=>"Window Server 2019", "so3"=>"Ubuntu 22.04", "so4"=>"Ubuntu Server LTS"); 
    $numeros = array(1,2,3,4,5,6,7,8,9);


    for ($i = 0; $i < count($array_ejemplo) ; $i++) {
        echo $array_ejemplo[$i] . "  ";
         
    }
    echo "<br>";

    foreach ($array_ejemplo as $a) {
        echo $a . "  ";;
         
    }
    echo "<br>";

    foreach ($asociativo as $i=>$a) {
        echo $i . ": " . $a . "  ";;
         
    }
    echo "<br>";
    
    foreach ($numeros as $i) {
        echo $i . "  ";
    }

    foreach ($numeros as &$i) {
        $i = $i*2;
        echo $i . " ";
        
    }
    var_dump($numeros);



?>
</body>

</html>


