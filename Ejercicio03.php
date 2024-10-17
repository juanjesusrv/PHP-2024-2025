<html>
    <body>
    <div id="ip1">
    <?php

        $numhoras = 40; //Las horas totales de la semana
        $numhextras = 0; //Iniciar la variable en 0 para evitar futuros errores
        $salarioExtra = 1.30; //Variable para ser usada al calcular el valor de una hora extra (El salario extra es 30%)
        $salarioHora = 8.6; //Salario base por hora
        $salarioHoraExtra = $salarioHora * $salarioExtra; //se calcula el valor de una hora extra

        $maximohorasN = 37; //Variable para las horas maximas sin horas extras
        $maximohorasE = 40; //Variable para las horas maximas incluyendo las horas extras

        if($numhoras < $maximohorasN && $numhoras > 0){ //Al no pasar de las 37
            $salariosem = $numhoras * $salarioHora; //calcula el horario semanal
            $salariototal = &$salariosem; //El salario total se iguala al semanal al no haber horas extras

        } else if($numhoras >= $maximohorasN && $numhoras <= $maximohorasE){ //Al pasar de las 36 horas y estar entre las 37 y 40
            $numhextras = $numhoras - $maximohorasN; //Se calcula el numero de horas
            $salariosem = $numhoras * $salarioHora; //Se calcula el salario semanal sin incluir las horas extras
            $salariototal = ($numhextras * $salarioHoraExtra) + $salariosem;//Calcula el salario incluyendo las horas extras
        }
        if($numhoras <= $maximohorasE && $numhoras > 0){ //Si el numero de horas total es correcto se mostrara toda la información
        echo "Número de horas trabajadas " . $numhoras. "<br>";
        echo "Salario semanal " . $salariosem. "<br>";
        echo "Número de horas extras " . $numhextras. "<br>";
        echo "Salario total  " . $salariototal. "<br>";
        
        } else{ //Si el numero de horas no es correcto se mostrará el mensaje de error
        echo "Numero de horas no puede pasar de las 40";
        }

    
    ?>
    </div>
    </body>
</html>