<?php
setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "coffe", time() + (86400 * 2), "/");
setcookie("fav_dessert", "ice-cream", time() + (86400 * 2), "/");

if(isset($_COOKIE["fav_food"])){
    echo "Buy some {$_COOKIE["fav_food"]}";
}else{
    echo "I do not know your favorite food";
}


foreach($_COOKIE as $key => $value){
    echo "{$key} = {$value} <br>";
}

?>