<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>

<body>
    <form action="radioButton.php" method="post">
        <input type="radio" name="credit_card" value="Visa"> Visa <br>
        <input type="radio" name="credit_card" value="Master"> Master Card <br>
        <input type="radio" name="credit_card" value="American-express"> American Express <br>
        <input type="submit" name="confirm" value="Confirm"><br>
    </form>
</body>

</html>

<?php

if (isset($_POST["confirm"])) {

    $credit_card = null;

    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
    }

    switch ($credit_card) {
        case "Visa":
            echo "You selected Visa";
            break;
        case "Master":
            echo "You selected Master card";
            break;
        case "American-express":
            echo "You selected American Express";
            break;
        default:
            echo "Please make a selection";
    }
}

?>