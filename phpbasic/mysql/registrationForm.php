<?php
include("databaseConnection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to Registration</h2>
        <label>Username : </label><br>
        <input type="text" name="username"><br>
        <label>Password : </label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Register"><br>
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username) || empty($password)) {
        echo "Please check again!";
    } else {

        try {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(user, password) VALUES ('$username', '$hash')";
            mysqli_query($conn, $sql);
            echo "You are now registered successfully!";
        } catch (mysqli_sql_exception) {
            echo "You have already registered!";
        }
    }
}

mysqli_close($conn);
?>