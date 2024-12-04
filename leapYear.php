<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="year">Enter year: </label>
        <input type="number" name="year">
        <button type="submit">Check for Leap year</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $year = $_POST["year"];
            if($year%4 == 0 && $year%100!=0)
                echo "<h1>Leap Year</h1>";
            else if($year%400 == 0)
                echo "<h1>Leap Year</h1>";
            else 
                echo "<h1>Not a Leap year</h1>";
        }

    ?>
</body>
</html>