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
        $luckyNumbers = array(4,8,14,16,23,42);

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
        for($i = 0; $i < count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>";
        }
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