<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $no1 = $_POST["txtn1"];
    $no2 = $_POST["txtn2"];
    if($no1 > $no2)
    {
        echo "No 1 is greater than No 2";
    }
    else
    {
        echo "No 2 is greater than NO 1";
    }

    ?>

</body>
</html>