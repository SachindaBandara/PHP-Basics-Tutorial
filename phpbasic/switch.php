<?php
$grade = "a";
$grade = strtoupper($grade);

switch ($grade) {
    case "A":
        echo "You did well";
        break;
    case "B":
        echo "You did good";
        break;
    case "C":
        echo "You did okay";
        break;
    case "D":
        echo "You did poorly";
        break;
    case "F":
        echo "You failed";
        break;
    default:
        echo "{$grade} is not valid";
}

// Example

$date = date("l"); // get the day of week



?>