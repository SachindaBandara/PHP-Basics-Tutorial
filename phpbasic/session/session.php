<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    This is the Login page <br>

    <form action="session.php" method="post">
        <label>Username: </label><br>
        <input type="text" name="username"><br>
        <label>Password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login"><br>
    </form>
</body>
</html>
<?php

if(isset($_POST["login"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php"); // Redirect to the home page
    }else{
        echo "Missing Username or Password <br>";
    }
}

?>