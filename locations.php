<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locations</title>
    <a href="index.php">link to go to home page.</a>
    <br>
    <!-- button for logout -->
    <form action="locations.php" method="post">
        <input type="submit" value="Logout" name="logout">
</head>
<body>
    
</body>
</html>
<?php
if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    header("Location: index.php");
}