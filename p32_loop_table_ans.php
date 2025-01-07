<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $number = intval($_POST['txtn1']);

            echo "<h2>Multiplication Table for $number</h2>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$number x $i = " . ($number * $i) . "<br>";
        }

    ?>

</body>
</html>