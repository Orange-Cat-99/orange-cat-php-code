<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $n1 = $_POST["txtn1"];
        $n2 = $_POST["txtn2"];
        $n3 = $_POST["txtn3"];
        

        if ($n1 >= $n2 && $n1 >= $n3) {
            echo "maximum number is $n1";
        } else if ($n2 >= $n1 && $n2 >= $n3) {
            echo "maximum number is $n2";
        } else {
            echo "maximum number is $n3";
        }

    ?>

    
</body>
</html>