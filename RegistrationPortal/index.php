<?php
include 'db.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gardening_style = $_POST['gardening_style'];

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, gardening_style) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $email, $password, $gardening_style]);

    sendWelcomeEmail($email, $username);
    echo "Registration successful! Please log in.";
}
?>

<form method="POST" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <select name="gardening_style">
        <option value="Organic">Organic</option>
        <option value="Hydroponics">Hydroponics</option>
        <option value="Urban Gardening">Urban Gardening</option>
    </select>
    <button type="submit">Register</button>
</form>
