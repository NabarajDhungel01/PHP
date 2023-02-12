<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>

    <form action="12_associative_array.php" method="post" >
    Name : <input type="text" name="name" id="">
    <input type="submit" >
    </form>





    <?php

    $name = $_POST["name"];
    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
    echo"<br>";
    echo " Grades is : " .  $grades[$name];
    ?>

</body>

</html>