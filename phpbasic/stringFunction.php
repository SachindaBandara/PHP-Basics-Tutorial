<?php

$username = " Sachinda Bandara ";
$name = array("Samantha", "de", "silva");
$phone = "123-4587-5696";

$username = strtolower($username);
$username = strtoupper($username);
$username = trim($username); // remove extra spaces
$username = str_pad($username, 20, "//"); // reamining sapces are replaced from //
$phone = str_replace("-", " ", $phone);
$username = strrev($username);
$username = str_shuffle($username);
$username = strcmp($username, " Sachinda Bandara "); // return true or false
$username = strlen($username);
$index = strpos($phone, "-"); // get the position
$firstName = substr($username, 0, 9);
$lastName = substr($username, 10);
$fullName = implode(" ", $name); // create a string combining array items

echo $fullName;

$fullName = explode(" ", $username); // convert string into array

foreach($fullName as $name){
    echo $name . "<br>";
}

?>