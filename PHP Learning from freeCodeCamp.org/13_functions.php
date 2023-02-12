<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>

    <form action="13_functions.php" method="post">

        Text : <input type="text" name="text">
        Age : <input type="text" name="age">
        <input type="submit" >

    </form>

    <?php

    function sayHi($name,$age)
    {
        
        echo "Hello $name. You are $age years old";
    }
    
    sayHi($_POST["text"],$_POST["age"]);
    ?>


</body>

</html>