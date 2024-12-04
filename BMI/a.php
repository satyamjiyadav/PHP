<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user inputs for weight and height
    $weight = $_POST['weight']; // Weight in kilograms
    $height = $_POST['height']; // Height in meters

    // Validate if inputs are numeric and greater than zero
    if (is_numeric($weight) && is_numeric($height) && $weight > 0 && $height > 0) {
        // Calculate BMI using the correct formula
        $bmi = $weight / ($height * $height);  // BMI formula: weight / height^2

        // Determine the BMI category using if-else
        if ($bmi < 18.5) {
            $category = "Underweight";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $category = "Normal weight";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $category = "Overweight";
        } else {
            $category = "Obese";
        }

        // Display the results
        echo "<h3>Your BMI: " . number_format($bmi, 2) . "</h3>";
        echo "<h4>BMI Category: " . $category . "</h4>";
    } else {
        echo "Please enter valid numbers for both weight and height.";
    }
}
?>

<!-- HTML Form to take input from the user -->
<form method="POST">
    <label for="weight">Weight (in kilograms): </label>
    <input type="text" name="weight" id="weight" required><br><br>
    
    <label for="height">Height (in meters): </label>
    <input type="text" name="height" id="height" required><br><br>
    
    <input type="submit" value="Calculate BMI">
</form>
