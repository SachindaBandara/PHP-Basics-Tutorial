<?php
//Strings
$name = "Sachinda Bandara";
$email = "sachinda@123gmail.com";

echo "Hi {$name}</br>";
echo "{$name} => your email address is {$email} </br>";

//Integer
$age = 26;
$users = 2;

echo "My age is {$age} </br>";
echo "There are {$users} users online </br>";

//float
$GPA = 2.03;
$price = 4.99;

echo "Your GPA is : {$GPA} </br>";
echo "Your pizza is \$ {$price} </br>";

//boolean
$employed = true;
$online = true;

echo "online status: {$online}</br>";
echo "you are {$employed}</br>";

//example

$food = "Pizza";
$quantity = 2;
$foodPrice = 10;

echo "You have ordered {$quantity}x pizzas </br>";

$total = $foodPrice * $quantity;
echo "Your Total Price is \${$total} </br>";
?>