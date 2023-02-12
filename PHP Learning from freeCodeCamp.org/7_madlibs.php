<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title>MALIDIBS</title>
</head>

<body>

<form action="7_madlibs.php" method="get">

Color: <input type="text" name="color">
PluralNoun: <input type="text" name="pluralNoun">
Celebrity: <input type="text" name="celebrity">


<input type="submit"  > 
</form>

<?php


$color =       $_GET["color"];
$pluralNoun =  $_GET["pluralNoun"];
$celebrity =   $_GET["celebrity"];

echo"<br><br>";
echo" Roses are $color <br> ";
echo"$pluralNoun are blue <br>";
echo"I love $celebrity <br>";

?>

</body>
<style>
    #submit {
        width: 50px;
    }
</style>
</html>