<?php
// 1. Declare an array of integers
$numbers = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];

// 2. Find the minimum and maximum values in the array
$minValue = min($numbers);
$maxValue = max($numbers);

// Output the minimum and maximum values
echo "Minimum value: " . $minValue . "\n";
echo "Maximum value: " . $maxValue . "\n";

// 3. Sort the array in ascending order
sort($numbers);

// Output the sorted array
echo "Sorted array: \n";
print_r($numbers);
?>
