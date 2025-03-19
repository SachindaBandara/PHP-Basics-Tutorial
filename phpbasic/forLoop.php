<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forLoop.php" method="post">
        <label>Enter a number to count to: </label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
// for ($i = 0; $i < 10; $i++) {
//     echo $i . "<br>";
// }

// for($i = 10; $i > 0; $i-=2){
//     echo $i . "<br>";
// }

$counter = $_POST["counter"];
// increment
for($i = 0; $i < $counter; $i++){
    echo $i . "<br>";
}
// decrement
for($i = $counter; $i > 0; $i--){
    echo $i . "<br>";
}
?>