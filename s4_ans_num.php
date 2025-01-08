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
        $n2 = $_POST["txtn1"];
        $n3 = $_POST["txtn1"];
        $ans = "";

        if($n3=="+")
        {
        $ans=$n1+$n2;
        }
         else if($n3=="-")

        {
        $ans=$n1-$n2;
        }
    

    ?>
    
    <form action="" method="post">

            <input type="text" value="<?php echo $n1;?>"> <br>
            <input type="text" value="<?php echo $n2;?>"> <br>
            <input type="text" value="<?php echo $n3;?>"> <br>
            <input type="text" value="<?php echo $ans;?>"> <br>

    </form>

</body>
</html>