<?php
// Function to double the values in an array
function doubleValue($array) {
    // Double each value in the array
    foreach ($array as &$value) {
        $value *= 2;
    }
    // Display the modified array inside the function
    echo "Modified Array Inside Function: ";
    print_r($array);
    echo "<br>";
}

// Original array
$originalArray = [1, 2, 3, 4, 5];

// Call the function
doubleValue($originalArray);

// Display the original array after the function call
echo "Original Array After Function Call: ";
print_r($originalArray);
?>
