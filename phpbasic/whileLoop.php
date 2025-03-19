<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="submit" name="stop" value="Stop"><br>
    </form>
</body>
</html>


<?php
// while($i<10){
//     $i++;
//     echo $i . "<br>";
// }

$seconds = 0;
$running = true;

while($running){
    if(isset($_POST["stop"])){
        $running = false;
    }else{
        $seconds++;
        echo $seconds . "<br>";
    }
}
?>