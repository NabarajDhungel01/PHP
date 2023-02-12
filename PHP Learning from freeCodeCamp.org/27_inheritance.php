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

    class Chef
    {
        var $name;
        var $age;
        var $exp;

        function makedish1()
        {
            echo "<br> I, $this->name made dish 1 ";
        }
        function makedish2()
        {
            echo "<br> I, $this->name made dish 2 ";
        }
        function makedish3()
        {
            echo "<br> I, $this->name made dish 3 ";
        }

        function __construct($name, $age, $exp)
        {
            $this->name = $name;
            $this->age = $age;
            $this->exp = $exp;
        }
        function makeSpecialDish()
        {
            echo " <br> I, $this->name made special dish ";
        }
    }

    class ItalianChef extends Chef
    {
        function makeItalianDish1()
        {
            echo " <br> I, $this->name made italian dish  1 ";
        }
        function makeItalianDish2()
        {
            echo " <br> I, $this->name made italian dish   2 ";
        }
    }

    $ram = new Chef("Ram",35,5);

    $michael = new ItalianChef("Micahel",40,10);
    

    // echo $ram->name;
    // echo $ram->age;
    // echo "<br>";
    // echo $michael->name;
    // echo $michael->age;

    $ram->makedish1();
    $ram->makedish2();

    $michael->makeSpecialDish();
    $michael->makeItalianDish1();

    ?>

</body>

</html>