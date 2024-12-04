<?php
include 'db.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (isAccountLocked($user['lockout_time'])) {
            echo "Account locked. Try again later.";
        } elseif (password_verify($password, $user['password'])) {
            $stmt = $conn->prepare("UPDATE users SET failed_attempts = 0, lockout_time = NULL WHERE email = ?");
            $stmt->execute([$email]);

            if ($remember_me) {
                setcookie('user', $email, time() + (86400 * 30), "/");
            } else {
                session_start();
                $_SESSION['user'] = $email;
            }

            header("Location: dashboard.php");
        } else {
            $failed_attempts = $user['failed_attempts'] + 1;
            $lockout_time = ($failed_attempts >= 3) ? date('Y-m-d H:i:s') : null;

            $stmt = $conn->prepare("UPDATE users SET failed_attempts = ?, lockout_time = ? WHERE email = ?");
            $stmt->execute([$failed_attempts, $lockout_time, $email]);

            echo "Invalid credentials.";
        }
    } else {
        echo "User not found.";
    }
}
?>

<form method="POST" action="">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <label>
        <input type="checkbox" name="remember_me"> Remember Me
    </label>
    <button type="submit">Login</button>
</form>
