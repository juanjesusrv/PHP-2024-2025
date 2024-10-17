<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 40?</title>
</head>
<body>

    <?php
        $nota = (int)10.5;

        if($nota < 5 && $nota > 0) {
            print("Suspenso");
        }elseif($nota < 7){
            print("Aprobado");
        }elseif($nota < 9){
            print("Notable");
        }elseif($nota <= 10){
            print("Sobresaliente");
        } else {
            print("La nota introducida no es valida");
        }

        print("<br>");

        switch($nota){
            case $nota < 5 :
                print("Suspenso");
                break;
            case $nota < 7:
                print("Aprobado");
                break;
            case $nota < 9:
                print("Notable");
                break;
            case $nota >= 9:
                print("Sobresaliente");
                break;  
                
            default:
            if ($nota < 0 || $nota > 10) {
                print("La nota no es valida");
            break;
        }
    }
    ?>

</body>
</html>