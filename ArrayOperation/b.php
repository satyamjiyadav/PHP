<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="POST">
            Enter a string: <input type="text" name="inputString">
            <button type="submit">Check Palindrome</button>
        </form>
</body>
</html>

<?php
// Function to check if a string is a palindrome
function isPalindrome($str) {
    // Remove non-alphanumeric characters and convert to lowercase
    $cleanedStr = preg_replace("/[^a-zA-Z0-9]/", "", $str);
    $cleanedStr = strtolower($cleanedStr);

    // Get the length of the cleaned string
    $length = strlen($cleanedStr);

    // Loop to compare characters from both ends
    for ($i = 0; $i < $length / 2; $i++) {
        if ($cleanedStr[$i] !== $cleanedStr[$length - $i - 1]) {
            return false; // Not a palindrome
        }
    }
    return true; // It is a palindrome
}

// Ask the user for input (assuming this is running in a web context)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    if (isPalindrome($inputString)) {
        echo "The string is a palindrome!";
    } else {
        echo "The string is not a palindrome!";
    }
} 
?>
