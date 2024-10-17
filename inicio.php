

        <?php
            echo $_SERVER['SERVER_NAME'] . "<br>";
            
            echo"El nombre del servidor es " . $_SERVER['SERVER_NAME'] . "<br>";
            echo"". $_SERVER['SERVER_PROTOCOL'] . "<br>";
            define ("PI",3.1416);
            echo PI;
            define("AULA","2DAW");
            echo"<br>" . AULA;

            $_bool = false;

            echo"La variable booleana contiene " .json_encode($_bool);
        ?>
        
</html>
