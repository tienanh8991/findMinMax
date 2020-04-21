<?php

include "function/findMax.php";
include "function/findMin.php";

$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[$i] = rand(1, 101);
}
foreach ($numbers as $number) {
    echo $number . " ";
}

$minValue = findMin($numbers);
echo "<br>";
echo "The min value is : " . $minValue;

$maxValue = findMax($numbers);
echo "<br>";
echo "The max value is : " . $maxValue;