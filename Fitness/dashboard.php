<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meal Dashboard</title>
</head>
<body>
    <h2>Your Meal Summary</h2>
    <table border="1">
        <tr>
            <th>Meal Name</th>
            <th>Calories</th>
            <th>Date</th>
        </tr>
        <?php
        if (file_exists('meals.txt')) {
            $meals = file('meals.txt');
            foreach ($meals as $meal) {
                list($meal_name, $calories, $date) = explode('|', $meal);
                echo "<tr>
                        <td>" . htmlspecialchars($meal_name) . "</td>
                        <td>" . htmlspecialchars($calories) . "</td>
                        <td>" . htmlspecialchars($date) . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No meals logged yet.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
