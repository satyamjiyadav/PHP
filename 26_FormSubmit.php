<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate fields
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        die("All fields are required. Please go back and fill in the form.");
    }

    if(strlen($password) < 8){
        die("length of password is less than 8");
    }

    if(!preg_match('/[A-Z]/', $password)){
        die(" <h1>Error</h1> Use at least one upperCase character");
    }

    if(!preg_match('/[0-9]/', $password)){
        die(" <h1>Error</h1> Use at least one number");
    }

    if(!preg_match('/[\W]/', $password)){
        die(" <h1>Error</h1> Use at least one Special Character");
    }

    // Sanitize data
    $firstname = htmlspecialchars($firstname);
    $lastname = htmlspecialchars($lastname);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format. Please go back and enter a valid email.");
    }

    // Display success message
    echo "<h1>Registration Successful</h1>";
    echo "<p>First Name: $firstname</p>";
    echo "<p>Last Name: $lastname</p>";
    echo "<p>Email: $email</p>";
} else {
    die("Invalid request method.");
}
?>
