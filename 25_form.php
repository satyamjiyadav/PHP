<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Register</h1>
    <form action="26_FormSubmit.php" method="POST">
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname" required><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
