<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Challenge Registration</title>
</head>
<body>
    <h2>Register for the Fitness Challenge</h2>
    <form method="POST" action="register.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required minlength="6"><br><br>

        <label for="fitness_goal">Fitness Goal:</label><br>
        <select id="fitness_goal" name="fitness_goal" required>
            <option value="Weight Loss">Weight Loss</option>
            <option value="Muscle Gain">Muscle Gain</option>
            <option value="Improved Stamina">Improved Stamina</option>
        </select><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $fitness_goal = $_POST['fitness_goal'];

    $errors = [];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate password
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    // Save data if valid
    if (empty($errors)) {
        // Save the user in a mock database (text file)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        file_put_contents('users.txt', "$username|$email|$hashedPassword|$fitness_goal\n", FILE_APPEND);
        echo "Registration successful!";
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
