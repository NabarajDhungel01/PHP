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
    class Students
    {
        var $name;
        var $faculty;
        var $marks1;
        var $marks2;
        var $marks3;
        function __construct($c_name, $c_faculty, $marks1, $marks2, $marks3)
        {
            echo " New student Created <br>";
            $this->name = $c_name;
            $this->faculty = $c_faculty;
            $this->marks1 = $marks1;
            $this->marks2 = $marks2;
        }
        function averageMarks()
        {
            $average = ($this->marks1 + $this->marks1 +  $this->marks1) / 3;
            echo "<br> The average marks  is $average";
        }
        function isPass()
        {
            $gpa = (($this->marks1 + $this->marks1 +  $this->marks1) / 3) / 25;
            if ($gpa < 2.1) {
                echo "<br> $this->name is  Fail";
            } else {
                echo "<br> $this->name is  Pass";
            }
        }
    }
    $student1 = new Students("Ram", "business", 88, 66, 95);
    $student2 = new Students("Hari", "science", 44, 66, 70);
    $student3 = new Students("Nabaraj", "microbiology", 25, 35, 40);

    $student1->averageMarks();

    $student3->averageMarks();
    $student3->isPass();
    ?>





</body>

</html>