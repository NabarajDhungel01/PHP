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

    $phrase = "Giraffe Academy";
    echo strtoupper($phrase);
    echo "<br>";
    echo strlen($phrase);
    echo "<br>";
    echo $phrase[0];
    echo "<br>";
    $phrase[0] = "B";
    echo $phrase;
    echo "<br>";
    echo "mike"[0];
    echo "<br>";
    echo str_replace("Giraffe", "Panda", $phrase);
    echo "<br>";
    echo substr($phrase,0,7);



    ?>

</body>

</html>