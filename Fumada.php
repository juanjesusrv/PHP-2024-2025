<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fumadon</title>
</head>
<body>
    <?php 
    
    $a = 'a';
    $b = $a;
    $c = $b;

    echo $a . "<br>";
    echo $$b . "<br>";
    echo $$$c;

    
    ?>
</body>
</html>