<html>
    <body>
        <?php 
        
            $art = 820;
            $descT = 0.15;
            $descE = 0.25;
            $pago = "Tarjeta";

            $precioFT= $art - ($art * $descT);
            $precioFE= $art - ($art * $descE);

            echo "Precio del artículo: " . $art . " euros <br>";
            if($pago == "Tarjeta" || $pago == "Efectivo"){
                echo "El precio pagando con tarjeta es: " . $precioFT  . " euros <br>";
                echo "El precio pagando en efectivo es: " . $precioFE . " euros <br>"; 
            } else {
                echo "No se acepta el tipo de pago";
            }

        ?>
    </body>
</html>