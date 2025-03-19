<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset & empty functions</title>
</head>
<>
    <form action="isSet&emptyFunctions.php" method="post">
        <lable>User Name: </lable><br>
        <input type="text" name="username"><br>
        <lable>Password: </lable><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login"><br>
    </form>
</body>
</html>

<?php

$login = $_POST["login"];

if(isset($login)){

    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo "User Name is missing";
    }elseif(empty($password)){
        echo "Password is missing";
    }else{
        echo "Hello {$username}";
    }
}

?>