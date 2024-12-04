<?php
session_start();

// Check if the user is already logged in, if so, redirect to home
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

// Dummy credentials for demonstration
$validUsername = "user";
$validPassword = "password";

// Process the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if credentials match
    if ($username == $validUsername && $password == $validPassword) {
        // Store session variables
        $_SESSION['username'] = $username;
        $_SESSION['lastLogin'] = time();  // Store the current time of login

        // Redirect to home page
        header("Location: home.php");
        exit();
    } else {
        $error = "Invalid credentials, please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    // Display error message if login fails
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>
