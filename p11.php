<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $h = $_POST["txth"];
    $b = $_POST["txtb"];
    $area = $h * $b * 0.5;
    echo "Area of Triangle is $area"
    ?>

</body>
</html>