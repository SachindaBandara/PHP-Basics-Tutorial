<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="form.php" method="post">
        <label>User Name: </label><br>
        <input type="text" name="username"><br>
        <label>Password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
echo "{$_GET["username"]} <br>";
echo "{$_GET["password"]} <br>";

echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";
?>