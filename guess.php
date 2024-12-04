<!DOCTYPE html>
<html>
<head>
    <title>5a226c0a - Guessing Game</title>
</head>
<body>
    <h1>Guess the Number Game</h1>
    <p>
        <?php
        // Set the correct answer to 59
        $correct_number = 59;

        // Check if the GET parameter 'guess' is set
        if (isset($_GET['guess'])) {
            $guess = $_GET['guess'];

            // Ensure the input is numeric
            if (strlen($guess) < 1) {
                echo "Your guess is too short";
            } else if (!is_numeric($guess)) {
                echo "Your guess is not a number";
            } else if ($guess < $correct_number) {
                echo "Your guess is too low";
            } else if ($guess > $correct_number) {
                echo "Your guess is too high";
            } else {
                echo "Congratulations - You are right";
            }
        } else {
            echo "Missing guess parameter.";
        }
        ?>
    </p>

    <form method="get">
        <label for="guess">Enter your guess:</label>
        <input type="text" name="guess" id="guess">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
