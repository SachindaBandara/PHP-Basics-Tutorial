<?php

$password = "sachinda@123";
// Create password hashing
$hash = password_hash($password, PASSWORD_DEFAULT); // PASSWORD_DEFAULT => represent the bcrypt algorithm
//echo $hash;

//Verify password
if(password_verify("sachinda@123", $hash)){
    echo "You are loggedin successfully!";
}else{
    echo "Invalid password!"; 
}

?>