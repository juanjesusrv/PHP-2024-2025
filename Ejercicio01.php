<html>
    <body>  
    <?php
    $vector1 = array("Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla");
    $vector2 = array("art1" => "Impresora 3D", "art2" => "Monitor INVES", "art3" => "Teclado Logitech G",
    "art4" => "Impresora HP", "iva" => 0.28, "fra" => FALSE);

    echo "<h1>EJERCICIO 1 TEMA 2. Juan Jesús Rivillas Canalejo</h1> <br>";
    echo var_dump( $vector1, TRUE ) ."<br><br>";
    echo "<h3>La capital de Andalucía es " . $vector1[6]. "</h3><br>";
    echo "Artículo 4: " . $vector2["art4"] . "<br>";
    echo "El articulo ". $vector2["art2"] . "tiene asociado un impuesto del ". $vector2["iva"] * 100 ."%<br>";
    echo "<h4> Factura: " . json_encode($vector2["fra"]) . "</h4>";
    ?>

    <h1></h1>
    </body>
</html>