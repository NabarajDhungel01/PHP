<!DOCTYPE html >
<html style="background-color:black;color:white;">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <title></title>
</head>

<body>

    <?php
    class Movie
    {
        public $title;
        private $rating;
        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating($rating);
        }
        function setRating($rating)
        {
            if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
        }

        function getRating()
        {
            echo "Rating : $this->rating ";
        }
    }
    $avengers = new Movie("Avengers", "PG-13");
    $avengers->getRating();
    ?>


</body>

</html>