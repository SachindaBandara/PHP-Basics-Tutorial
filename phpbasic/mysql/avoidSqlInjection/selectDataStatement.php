<?php
include("../databaseConnection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Data from DB using Prepared statements</title>
</head>

<body>
    <form action="" method="post">
        <label>Username : </label><br>
        <input type="text" name="username" placeholder="Enter Your Name"><br>
        <input type="submit" name="submit" value="Find">
    </form>

    <?php

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];

        $sql = "SELECT * FROM users WHERE user = ?";

        //Create a statement
        $stmt = mysqli_stmt_init($conn);

        //Prepare the statemen
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            // Bind the parameters with placeholders
            mysqli_stmt_bind_param($stmt, "s", $username);
            // Run the prepared statement
            mysqli_stmt_execute($stmt);

            //Get the data
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {

                // Print the data
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Id : " . $row["id"] . "<br>";
                    echo "Registration Date : " . $row["reg_date"] . "<br>";
                }
            } else {
                echo "Can not fetch data";
            }
        }
    }

    mysqli_close($conn);
    ?>

</body>

</html>