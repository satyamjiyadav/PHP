<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <h2>Check your password is strong or not</h2>
        <label for="password">Enter password: </label>
        <input type="text" name="password">
        <button type="submit">Check</button>
    </form>
    <?php
    // Password Validation
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pass = $_POST["password"];
        $len = strlen($pass);
        $uppercase = false;
        $lowercase = false;
        $number = false;
        $pattern = "/[W_@#$%^&*!]/"; // Special character pattern
        for($i=0; $i<$len; $i++) {
            if(ord($pass[$i]) >= 65 && ord($pass[$i]) <= 90)
                $uppercase = true;
            if(ord($pass[$i]) >= 97 && ord($pass[$i]) <= 122)
                $lowercase = true;
            if(ord($pass[$i]) >= 48 && ord($pass[$i]) <= 57)
                $number = true;
        }
        $specialChar = preg_match($pattern, $pass); // Match special characters using preg_match
        /*
        Another way is to use pregMatch
        */
        if($len>=8 && $uppercase && $lowercase && $number && $specialChar)
            echo "<h4>Your password is Strong</h4>";
        else {
            echo "<h4>Your password is not strong</h4>";
            if($len < 8)
                echo "<h4>Your password length is less than 8</h4>";
            if(!$uppercase)
                echo "<h4>Your password should contain at least one Uppercase Character</h4>";
            if(!$lowercase)
                echo "<h4>Your password should contain at least one Lowercase Character</h4>";
            if(!$number)
                echo "<h4>Your password should contain at least one number</h4>";
            if(!$specialChar)
                echo "<h4>Your password should contain at least one Special Character</h4>";
        }
    }
    ?>
</body>
</html>
