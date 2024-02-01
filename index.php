<!-- sessions -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
<form action="index.php" method ="post">
    Username: <input type="text" name="username">
    <br>
    Password: <input type="password" name="password">
    <br>
    <input type="submit" value="Login" name="login">
</form>

</head>
<body>
    
</body>
</html>
<?php
if(isset($_POST["login"])){
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        echo "Session variables are set.";
        header("Location: locations.php");

    }else{
        echo "Please enter username and password";
    }
}