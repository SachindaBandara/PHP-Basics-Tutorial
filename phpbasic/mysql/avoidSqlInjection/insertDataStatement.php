<?php
include("../databaseConnection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data from DB using Prepared statements</title>
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
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users(user, password) VALUES(?,?)";

        //Create a statement
        $stmt = mysqli_stmt_init($conn);

        //Prepare the statemen
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            // Bind the parameters with placeholders
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            // Run the prepared statement
            mysqli_stmt_execute($stmt);

            echo "Sucessfully inserted!";
        }
    }

    mysqli_close($conn);
    ?>

</body>
</html>