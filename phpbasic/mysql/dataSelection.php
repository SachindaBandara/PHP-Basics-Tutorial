<?php
include("databaseConnection.php");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

try{

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Id : " . $row["id"] . "<br>";
            echo "Name : " . $row["user"] . "<br>";
            echo "Registration Date : " . $row["reg_date"] . "<br>";
        }
    }

}catch(mysqli_sql_exception){
    echo "Can not fetch data";
}

mysqli_close($conn);
?>