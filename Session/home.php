<?php
session_start();

// Check if session is set and if it has expired
if (!isset($_SESSION['username'])) {
    header("Location:login.php");  // Redirect to login if not logged in
    exit();
}

// Session timeout after 10 minutes (600 seconds)
if (isset($_SESSION['lastLogin']) && (time() - $_SESSION['lastLogin']) > 600) {
    // Destroy session and redirect to login page if session expired
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Update the last login time on each page visit
$_SESSION['lastLogin'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Your last login time was: <?php echo date("Y-m-d H:i:s", $_SESSION['lastLogin']); ?></p>

    <a href="logout.php">Logout</a>
</body>
</html>
