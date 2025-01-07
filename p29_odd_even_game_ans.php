<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $n = $_POST["txtn1"];

        if($n % 2 == 0)
        {
            echo "Your number is even";
        }

        else
        {
            echo "Your number is odd";
        }

    ?>


</body>
</html>