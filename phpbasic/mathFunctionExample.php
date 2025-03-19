<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function Example</title>
</head>

<body>
    <form action="mathFunctionExample.php" method="post">
        <label>Radius</label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>

</html>
<?php
    $radius = $_POST["radius"];
    $Circumference = null;
    $area = null;
    $volume = null;

    $Circumference = 2 * pi() * $radius;
    $Circumference = round($Circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = (4/3) * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$Circumference} cm <br>";
    echo "Area = {$area} cm*2 <br>";
    echo "Volume = {$volume} cm*3 <br>";
?>