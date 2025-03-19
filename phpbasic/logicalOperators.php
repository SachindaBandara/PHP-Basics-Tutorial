<?php
$temp = 15;
$cloudy = false;

if ($temp < 0 || $temp > 30) {
    echo "The Weather is bad. <br>";
} else {
    echo "The Weather is good. <br>";
}

if (!$cloudy) {
    echo "It is sunny!";
} else {
    echo "It is cloudy!";
}

// Example
$age = 18;
$citizen = true;

if($age >= 18 && $citizen){
    echo "You can vote";
}else{
    echo "You can not vote";
}

?>