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
    class Book
    {
        var $title;
        var $author;
        var $pages;
        function __construct($c_title, $c_author, $pages)
        {
            echo " New Book Created <br>";
            $this->title = $c_title;
            $this->author = $c_author;
            $this->pages = $pages;
        }
    }
    $book1 = new Book("Harry Potter", "JK Rowling", 400);
    $book1->title = "Hunger Games";
    $book2 = new Book("Lord of the Rings", "Tollen", 700);
    echo $book1->title;
    ?>


</body>

</html>