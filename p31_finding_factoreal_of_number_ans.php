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

    function factorial($n) {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;  
        }
        return $result;
    }

    echo "The factorial of $number is: " . factorial($number);


    ?>

</body>
</html>