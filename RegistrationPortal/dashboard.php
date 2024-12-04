<?php
session_start();

if (!isset($_SESSION['user']) && !isset($_COOKIE['user'])) {
    header("Location: login.php");
    exit;
}

$user_email = $_SESSION['user'] ?? $_COOKIE['user'];
echo "Welcome, $user_email! <a href='logout.php'>Logout</a>";
?>
