<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>

<form action="index5_form.php" method="get">

    Name : <input type="text" name="username">
    Age : <input type="text" name="age">
    <input type="submit">
</form>
<br>
Your name is : <?php echo  $_GET["username"]?>
<br>
Your age is : <?php echo  $_GET["age"]?>


</body>

</html>