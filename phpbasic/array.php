<?php
$foods = array("apple", "orange", "banana", "coconut");

$foods[0] = "pineapple"; // update the array value
echo count($foods);

array_push($foods, "pineapple"); // add new value into array
array_pop($foods); // remove last value
array_shift($foods); // remove first value of the array

$foods = array_reverse($foods); // create reverse order of the array ( create new array )


foreach( $foods as $food ){
    echo $food . "<br>";
}
?>