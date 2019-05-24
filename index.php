<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Course Examples</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <form action="index.php" method="post">

    </form>

    <?php
        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");
                    // G, PG, PG-13, R, NR
        echo $avengers->getRating();
    ?>

    <?php
    /*
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "<h2>Honor Roll</h2>";
                } 
                return "<h2>Not on the Honor Roll</h2>";
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Art", 3.6);

        echo $student2->hasHonors();
    */
    ?>

    <?php
        /*
        // class
        class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book2 = new Book("Lord of the Rings", "Tolkein", 700);

        echo $book2->author;
        */

        /*
        // object
        $book1 = new Book();
        $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 400;

        $book2 = new Book("Tom");
        $book2->title = "Lord of the Rings";
        $book2->author = "Tolkein";
        $book2->pages = 700;

        echo $book2->title;
        echo $book2->author;
        */
    ?>

    <?php
        // the "inefficient" way of dong this:
        /*
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++;
        }
        */

        /*
        // the "efficient" way:
        for($i = 1; $i <= 5; $i++) {
            echo "$i <br>";
        }
        */

        // looping through an array
        /*
        $luckyNumbers = array(4,8,14,16,23,42);
        for($i = 0; $i < count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>";
        }
        */
    ?>

    <?php
    // switch statements to respond to user inputs
    /*
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did great!";
                break;
            case "B":
                echo "You did pretty good.";
                break;
            case "C":
                echo "You should have studied more.";
                break;
            case "D":
                echo "That's emabarassing";
                break;
            case "F";
                echo "You failed.";
                break;
            default:
                echo "<h1>Invalid Entry</h1>";
        }
    */
    ?>

    <?php
    // small calculator
    /*
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        if ($op == "+") {
            echo ($num1 + $num2);
        } elseif ($op == "-") {
            echo ($num1 - $num2);
        } elseif ($op == "/") {
            echo ($num1 / $num2);
        } elseif ($op == "*") {
            echo ($num1 * $num2);
        } else {
            echo ("<h1>ERROR</h1>");
        }
    */
    ?>

    <?php 
    // chaning the color of div based on user input
    /*
        $gender = $_POST["gender"];

        if ($gender == "male") {
            echo "<div class='blue'>Male</div>";
        } else if ($gender == "Male") {
            echo "<div class='blue'>Male</div>";
        } else {
            echo "<div class='pink'>Female</div>";
        }
        */
    ?>

    <?php
    // returning the max of a set of user inputs
    /*
        function getMax($num1, $num2, $num3) {
            if($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }
        echo getMax(3,401,400);
    */
    ?>

    </body>
</html>