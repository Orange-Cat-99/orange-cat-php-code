<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $age = $_POST["txtnage"];
    if($age >= 18)
    {
        echo "You can drive";
    }
    else
    {
        echo "You can't drive";
    }

    ?>

</body>
</html>