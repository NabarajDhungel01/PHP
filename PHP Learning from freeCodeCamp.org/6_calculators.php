<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>

    <form action="6_calculators.php" method="get">

        <input type="number" name="num1" id="">
        <input type="number" name="num2" id="">
        <input type="submit">


    </form>


    <?php
    echo $_GET["num1"] + $_GET["num2"]
    ?>

</body>

</html>