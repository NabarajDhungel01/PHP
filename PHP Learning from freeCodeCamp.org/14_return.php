<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>
    <form action="14_return.php" method="post">

        Num : <input type="text" name="number">
        <input type="submit">

    </form>


    <?php
        function square($num){
            return $num * $num;
        }

        $number  = $_POST["number"];
        // $square_of_number = square($number);
        // echo "Square is $square_of_number";
        echo square($number);


    ?>


</body>

</html>