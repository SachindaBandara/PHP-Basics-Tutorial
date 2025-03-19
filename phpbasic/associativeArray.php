<?php
// Associative Array is an array made of key => value pairs

$capitals = array("USA" => "Washington DC",
                "Japan" => "Tokyo",
                "South Korea" => "Seoul",
                "India" => "New Delhi"
            );

$capitals["USA"] = "Las Vegas";
$capitals["Chaina"] = "Bejing";
array_pop($capitals);
array_shift($capitals);
$keys = array_keys($capitals);
$values = array_values($capitals);
$capitals = array_flip($capitals);
$capitals = array_reverse($capitals);

echo count($capitals);

foreach($capitals as $key => $value){
    echo "{$key} -> {$value} <br>";
};

foreach($keys as $key){
    echo "{$key} <br>";
};

foreach($values as $value){
    echo "{$value} <br>";
};
?>