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
    $d = $c;

    echo $a . "<br>";
    echo $$b . "<br>";
    echo $$$c . "<br>";


$array1 = [1, 2, 3, 4, 5];
$array2 = [1, 2, 3, 4, 5];

$array3 = array_merge($array1, $array2);

for ($i = 0; $i < count($array3); $i++) {
    echo $array3[$i];
}
echo "<br>";

echo var_export($array3, true);
$array3 = array_unique($array3);
echo "<br>";
echo var_export($array3, true);

echo "<br>";
for ($i = 0; $i < count($array3); $i++) {
    echo $array3[$i];
}
echo "<br>";


function suma($nombre = "Pedro") {
    return "Hola " . $nombre;
}

echo suma();

    
    ?>
</body>
</html>