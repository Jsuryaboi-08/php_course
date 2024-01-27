<!-- <?php
        echo "Hello World!";
        echo " its really good";
        // this is a comment 

        /* this is a
multiline comment */
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <br>
    <button>order pizza bro</button>
</head>

<body>

</body>

</html> -->

<!-- <?php
        // variable a reusable container that holds data
        // types of variables: string, integer, float, boolean, array, object, null, resource;

        // $name = "John";
        // echo $name;

        $name = "John";
        $email = "fakemail123@gmailyahoo.com";

        $gpa = "6.9";
        $employed = true;
        // ARRAY 

        $ARRAY = array("John", "Jane", "Doe");
        echo $ARRAY[0];
        echo "My name is {$name}<br>";
        echo "My email is {$email}<br>";
        ?> -->


<!-- //arithmetic operators on php -->
<!-- 
// arithmetic operators are: +, -, *, /, %, **;
// examples for each one of them -->
<!-- <?php
        $x = 5;
        $y = 10;
        $z = NULL;

        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";

        echo $x / $y;
        echo "<br>";
        echo $x % $y;
        echo "<br>";
        echo $x ** $y;
        echo "<br>";
        echo $z;
        echo "<br>";
        echo $z++;
        echo "<br>";
        echo $z;
        echo "<br>";
        echo ++$z;
        echo "<br>";
        echo $z;
        echo "<br>";
        echo --$z;
        echo "<br>";
        echo $z;
        echo "<br>";

        echo $x += $y;
        echo "<br>";
        echo $x -= $y;
        echo "<br>";
        echo $x *= $y;
        echo "<br>";
        echo $x /= $y;
        echo "<br>";
        echo $x %= $y;
        echo "<br>";
        echo $x **= $y;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";
        echo $x == $y;
        echo "<br>";
        echo $x != $y;
        echo "<br>";
        echo $x <> $y;
        echo "<br>";
        echo $x > $y;
        echo "<br>";
        echo $x < $y;
        echo "<br>";
        echo $x >= $y;
        echo "<br>";
        echo $x <= $y;
        echo "<br>";
        echo $x <=> $y;
        echo "<br>";
        echo $x === $y;
        echo "<br>";
        echo $x !== $y;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";
        echo $x & $y;
        echo "<br>";
        ?> -->




<!-- // php get and post methods -->

<!-- // GET METHOD -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- //create a form getting user name anpassword and use get method in the actioon of the form -->
    <!-- <form action="index.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Password: <input type="password" name="password">
        <br>
        <input type="submit" value="login">
</head>
<body>
    
</body>
</html>
<?php

echo "<br>";
echo $_GET['name'];
echo "<br>";
echo $_GET["password"];
echo "<br>";

?>--> 

<!-- // POST METHOD -->
<!-- //create a form getting user name anpassword and use post method in the actioon of the form -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="index.php" method="post">
        Name: <input type="text" name="name">
        <br>
        Password: <input type="password" name="password">
        <br>
        <input type="submit" value="login">
</head>
<body>
    
</body>
</html>

<?php

echo "<br>";
echo $_POST['name'];
echo "<br>";
echo $_POST["password"];
echo "<br>";
?> -->


<!-- task 1  -->
<!-- create a form for a pizza ordering platform and just display the total using php -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pizza site lol</title>
<form action="index.php", method="post">
    number of pizzas: <input type="quantity" name="quantity">
    <br>
    <input type="submit" value="order">
</form>

</head>
<body>
    
</body>
</html>

<?php
echo "<br>";
$price = 15.99;
$quantity =$_POST['quantity'];
$total = $price * $quantity;

echo "your total is {$total} dollars";
echo "<br>";
?> -->


<!-- math functions -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math functions</title>
    <form action="index.php" method="post">
        x: <input type="number" name="x">
        <br>
        y: <input type="number" name="y">
        <br>
        z: <input type="number" name="z">
        <br>
        <input type="submit" value="calculate">
    </form>
</head>
<body>
    
</body>
</html>
<?php
echo "<br>";
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];
$total=null;

// $total = abs($x);
// $total = pow($x, $y);
// $total = sqrt($x);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = round($x);
// $total = ceil($x);
// $total = floor($x);
// $total = rand($x, $y);
// $total = log($x);
// $total = log10($x);
// $total = pi();
// $total = exp($x);
// $total = sin($x);
// $total = cos($x);
// $total = tan($x);
 echo $total;
?> -->
<!-- 

<!-- task 3 -->
<!-- creat a radius form and output area circumference and volume of the cicle -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radius form</title>
    <form action="index.php" method="post">
        radius: <input type="number" name="radius">
        <br>
        <input type="submit" value="calculate">
</head>
<body>
    
</body>
</html>
<?php
echo "<br>";
$radius = $_POST['radius'];
$area = pi() * pow($radius, 2);
$circumference = 2 * pi() * $radius;
$volume = (4/3) * pi() * pow($radius, 3);
echo "the area of the circle {$area} cm^2";
echo "<br>";
echo "the circumference of the circle {$circumference} cm";
echo "<br>";
echo "the volume of the circle {$volume} cm^3";
echo "<br>";
?> -->

<!-- if statements -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF statements</title>
    <form action="index.php" method="post">
        Number of hours: <input type="number" name="hours">
        <br>
        <input type="submit" value="calculate">
    </form>
</head>
<body>
    
</body>
</html>
// php initalise here(issue with the comment)

// $hours = $_POST['hours'];
// $rate = 15;
// $pay = null;

// if ($hours >0){
//     if($hours>=40){
//         $normal_pay = $hours * $rate; 
//         $overtime_pay = ($hours - 40) * ($rate * 1.5);
//         $pay = $normal_pay + $overtime_pay;
//         echo "your pay is {$pay} dollars";
//     }else{
//         $pay = $hours * $rate;
//         echo "your pay is {$pay} dollars";
//     }
// }
// else{
//     echo "invalid input";
// }  -->

<!-- logical operators -->

<!-- <?php

$age = 21;

if($age >= 18 && $age <= 100){
    echo "you can enter the website";
}elseif(!$age >= 0 && $age <= 17){
    echo "you cant enter";
}elseif($age >100 || $age <0){
    echo "invalid input";
}

?>
 -->




 <!-- switch statements

<!-- <?php

 $day = "monday";

 switch($day){
     case "monday":
        echo "today is monday";
        break;
    case "tuesday":
        echo "today is tuesday";
        break;
    case "wednesday":
        echo "today is wednesday";
        break;
    case "thursday":
        echo "today is thursday";
        break;
    case "friday":
        echo "today is friday";
        break;
    case "saturday":
        echo "today is saturday";
        break;
    case "sunday":
        echo "today is sunday";
        break;
    default:
        echo "invalid input";
        break;
 } 
?> -->
 
<!-- task 4 -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for loopst</title>
    <form action="index.php" method="post">
        Counter <input type="number" name="count">
        <br>
        <input type="submit" value="calculate">
</head>
<body>
    
</body>
</html>

<?php

echo "<br>";
$count = $_POST['count'];
for($i = 0; $i <= $count; $i++){
    echo $i;
    echo "<br>";
}
?> -->


<!-- task 5 -->
<!-- while loops  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while loops</title>
</head>
<body>
    <form action="index.php", method= "post">
        <br>
        <input type="submit" name = "stop"value="stop">
    </form>
</body>
</html>
<?php
echo "<br>";
$seconds = 0;
$running = true;
 while ($running){
     echo $seconds;
     echo "<br>";
     sleep(1);
     $seconds++;
     if(isset($_POST['stop'])){
         $running = false;
     }
 }

?>
