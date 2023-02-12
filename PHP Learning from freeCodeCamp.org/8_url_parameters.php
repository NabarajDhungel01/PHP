<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>
    <h1></h1>

    <form action="8_url_parameters.php" method="get">
        text1 <input type="text" name="text1" id=""><br><br>
        text2 <input type="text" name="text2" id=""><br><br>
        <input type="submit">
    </form>


    <?php

    $text1 = $_GET["text1"] ;
    $text2 = $_GET["text2"] ;


    echo "
    <br> 
    <h1> $text1 </h1> 
    <br> 
    <h2> $text2 </h2> 

    "

    ?>
</body>

</html>