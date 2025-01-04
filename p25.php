<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $num = $_POST["txtnnum"];

    
    for($i=1; $i<=$num; $i++)
    {
        $s = $i * $i;
        echo "$i -- $s <br>";
    }

    ?>

</body>
</html>