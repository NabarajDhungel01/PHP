<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>

    <form action="15_if_statement.php" method="post">
        Text : <input type="text" name="text" id="" value="default">


    </form>




    <?php
    $text = $_POST["text"];
    $print = true;


    if ($text == "default" && $print ) {
    echo "Default Value";
    } else {
    echo " Not a default value";
    }

  


    ?>


</body>

</html>