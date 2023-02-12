<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>

    <form action="11_checkbox.php" method="post">
        <p>What are your favorite foods?</p>
        <input type="checkbox" id="pizza" name="food[]" value="pizza">
        <label for="pizza">Pizza</label><br>
        <input type="checkbox" id="burger" name="food[]" value="burger">
        <label for="burger">Burger</label><br>
        <input type="checkbox" id="tacos" name="food[]" value="tacos">
        <label for="tacos">Tacos</label><br>
        <input type="checkbox" id="sushi" name="food[]" value="sushi">
        <label for="sushi">Sushi</label><br>
        <input type="checkbox" id="pasta" name="food[]" value="pasta">
        <label for="pasta">Pasta</label><br><br>

        <p>What are your favorite fruits?</p>
        <input type="checkbox" id="apple" name="fruit[]" value="apple">
        <label for="apple">Apple</label><br>
        <input type="checkbox" id="banana" name="fruit[]" value="banana">
        <label for="banana">Banana</label><br>
        <input type="checkbox" id="strawberry" name="fruit[]" value="strawberry">
        <label for="strawberry">Strawberry</label><br>
        <input type="checkbox" id="grape" name="fruit[]" value="grape">
        <label for="grape">Grape</label><br>
        <input type="checkbox" id="orange" name="fruit[]" value="orange">
        <label for="orange">Orange</label><br><br>

        <p>What are your favorite colors?</p>
        <input type="checkbox" id="red" name="color[]" value=" red">
        <label for="red">Red</label><br>
        <input type="checkbox" id="blue" name="color[]" value=" blue">
        <label for="blue">Blue</label><br>
        <input type="checkbox" id="green" name="color[]" value=" green">
        <label for="green">Green</label><br>
        <input type="checkbox" id="purple" name="color[]" value=" purple">
        <label for="purple">Purple</label><br>
        <input type="checkbox" id="yellow" name="color[]" value=" yellow">
        <label for="yellow">Yellow</label><br><br>

        <input type="submit" value="Submit">
    </form>


    <?php

    $foods = $_POST["food"];
    $fruits = $_POST["fruit"];
    $colors = $_POST["color"];

    echo $foods[0]; 
    echo "<br>";
    echo $fruits[0];
    echo "<br>";
    echo $colors[0];
    echo "<br>";
    ?>

</body>

</html>