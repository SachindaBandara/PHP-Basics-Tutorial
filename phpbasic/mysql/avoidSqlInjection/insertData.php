<?php
include("../databaseConnection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protect from SQL Injections</title>
</head>

<body>
    <form action="" method="post">
        <label>Username : </label><br>
        <input type="text" name="username" placeholder="Enter Your Name"><br>
        <label>Password : </label><br>
        <input type="password" name="password" placeholder="Enter Your Password"><br>
        <input type="submit" name="submit" value="Sumbit">
    </form>

    <?php
    
    if (isset($_POST["submit"])) {
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);

        // Create sql insertion query
        $sql = "INSERT INTO users(user, password) VALUES('$username', '$password')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Successfully Registered!";
        }
    }

    mysqli_close($conn);
    ?>

</body>
</html>