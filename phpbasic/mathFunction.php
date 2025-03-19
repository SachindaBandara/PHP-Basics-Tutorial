<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math functions</title>
</head>

<body>
    <form action="mathFunction.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>

</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

$total = abs($x); // get the positive number
$total = round($x); // 2.9 => 3  2.3 => 2
$total = floor($x); // 2.9 => 2
$total = ceil($x); // 2.14 => 3
$total = sqrt($x);
$total = pow($x, $y);
$total = max($x, $y, $z);
$total = min($x, $y, $z);
$total = pi();
$total = rand(1, 100); // Random Number Generator

echo $total;
?>