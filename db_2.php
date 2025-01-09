<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $cnn=mysqli_connect("localhost","root","","db_neo");
    $qry="select * from emp";
    $result=$cnn->query($qry);
    while($row=$result->fetch_assoc())
    {
    $eno=$row["eno"];
    $ename=$row["ename"];
    $gender=$row["gender"];
    $salary=$row["salary"];
    $dname=$row["dname"];
    echo "<br>$eno --- $ename --- $gender --- $salary --- $dname";
    }

?>
</body>
</html>