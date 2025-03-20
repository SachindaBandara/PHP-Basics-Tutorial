<?php
function hypotenuse(int $a, int $b){
    $c = sqrt($a **2 + $b ** 2);
    return $c;
}

$hypotenuse = hypotenuse(3, 4);
echo $hypotenuse;

?>