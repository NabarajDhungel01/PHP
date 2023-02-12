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

    <form action="9_post.php" method="post">
        text1 <input type="text" name="text1" id=""><br><br>
        text2 <input type="password" name="text2" id=""><br><br>
        <input type="submit">
    </form>


    <?php

    $text1 = $_POST["text1"] ;
    $text2 = $_POST["text2"] ;


    echo "
    <br> 
    <h1> $text1 </h1> 
    <br> 
    <h2> $text2 </h2> 

    "

    ?>
</body>

</html>