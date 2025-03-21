<?php
$db_server = "127.0.0.1:3308";
$db_user = "root";
$db_password = "";
$db_name = "sachinda";
$conn = "";

try{
$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if($conn){
    echo "connected successfully! <br>";
}

}catch(mysqli_sql_exception){
    echo "Not connected! <br>";
}
?>