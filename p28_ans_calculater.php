<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    $a = $_POST["txtn1"];
    $b = $_POST["txtn2"];
    $c = $a + $b;
    echo "add is $c";
    echo "<br>"; 
    $d = $a - $b;
    echo "sub is $d"; 
    echo "<br>";
    $e = $a * $b;
    echo "mul is $e";
    echo "<br>";
    $f = $a / $b;
    echo "div is $f";
    echo "<br>";
    ?>

</body>
</html>