<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vlidation & sanitization</title>
</head>

<body>
    <form action="vlidation&sanitization.php" method="post">
        <label>Username: </label><br>
        <input type="text" name="username"><br>
        <label>age: </label><br>
        <input type="text" name="age"><br>
        <label>email: </label><br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {

    // Input Sanitization
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Your username is {$username} <br>";
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    echo "Your age is {$age} <br>";
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "Your username is {$email} <br>";

    // Input Validation
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($email)) {
        echo "That email is not valid!";
    } else {
        echo "Your age is : {$email}";
    }
}

?>