<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>

<?php
    $num1 = 2;
    $num2 = 4;

    echo $num1;
    echo $num2;
    echo"<br>";
    echo $num1 + $num2;
    echo"<br>";

    $num1++;
    echo $num1;

    echo"<br>";
    echo -10;
    echo"<br>";
    echo 5+9;
    
    echo"<br>";
    echo"<br>";

    $num = 10;

    echo abs(-100);
    echo "<br>";
    echo pow(2,4);
    echo "<br>";
    echo "<br>";
    
    echo max($num1,$num2);
    echo "<br>";

    echo min($num1,$num2);
    echo "<br>";

    echo "<br>";
    echo round(3.2);
    echo "<br>";
    echo round(3.7);
    echo "<br>";
    echo ceil(5.4); // rounds up to the max even if its 1.1. , it will make two
    echo "<br>";
    echo ceil(5.0001); 
    echo "<br>";
    echo floor(5.99);  // rounds up below 
    echo "<br>";







?>

</body>

</html>