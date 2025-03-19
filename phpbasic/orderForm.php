<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oder price calculator</title>
</head>

<body>
    <form action="orderForm.php" method="post">
        <label>Quantity: </label>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
<?php
    $item = "pizza";
    $price = 4.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}";
?>