<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check box</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="Pizza" value="Pizza"> Pizza <br>
        <input type="checkbox" name="Burgur" value="Burgur"> Burgur <br>
        <input type="checkbox" name="Hotdog" value="Hotdog"> Hotdog <br>
        <input type="checkbox" name="taco" value="taco"> taco <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php

if(isset($_POST["submit"])){
    if(isset($_POST["Pizza"])){
        echo "Your select Pizza! <br>";
    }
    if(isset($_POST["Burgur"])){
        echo "Your select Burgur! <br>";
    }
    if(isset($_POST["Hotdog"])){
        echo "Your select Hotdog! <br>";
    }
    if(isset($_POST["taco"])){
        echo "Your select taco! <br>";
    }
}

?>