<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Your Meal</title>
</head>
<body>
    <h2>Log Your Meal</h2>
    <form method="POST" action="log_meal.php">
        <label for="meal_name">Meal Name:</label><br>
        <input type="text" id="meal_name" name="meal_name" required><br><br>

        <label for="calories">Calories:</label><br>
        <input type="number" id="calories" name="calories" required min="0"><br><br>

        <button type="submit">Log Meal</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meal_name = trim($_POST['meal_name']);
    $calories = $_POST['calories'];

    $errors = [];

    // Validate meal name
    if (empty($meal_name)) {
        $errors[] = "Meal name cannot be empty.";
    }

    // Validate calorie count
    if (!is_numeric($calories) || $calories <= 0) {
        $errors[] = "Calorie count must be a positive integer.";
    }

    if (empty($errors)) {
        // Log meal in a text file
        file_put_contents('meals.txt', "$meal_name|$calories|" . date('Y-m-d') . "\n", FILE_APPEND);
        echo "Meal logged successfully!";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
