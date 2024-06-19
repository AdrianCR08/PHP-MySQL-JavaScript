<?php
$dayNumber = date('z');
// echo $dayNumber;
$daysToNewYear = 366 - $dayNumber; // Expression
if ($daysToNewYear <= 183){
    echo "Not long now till new year<br>";
} else {
    echo "Still far from new year\n";
}

