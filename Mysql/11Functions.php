<form action="" method="post">
    <input type="text" name="column" placeholder="Enter column name (e.g., marks)">
    <br><br>
    <button type="submit" name="avg">Get Average</button>
    <button type="submit" name="count">Get Count</button>
    <button type="submit" name="sum">Get Sum</button>
    <button type="submit" name="min">Get Min</button>
    <button type="submit" name="max">Get Max</button>
    <button type="submit" name="lowercase">Get Lowercase</button>
    <button type="submit" name="uppercase">Get Uppercase</button>
</form>

<?php
include('./3config.php');  // Assuming this contains the DB connection setup

echo "<br>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $column = $_POST['column'];

    if (isset($_POST['avg'])) {
        $stmt = $conn->prepare("SELECT AVG($column) AS average FROM stud");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Average of $column: " . $result['average'] . "<br>";
    }

    if (isset($_POST['count'])) {
        $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM stud");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Count of students: " . $result['count'] . "<br>";
    }

    if (isset($_POST['sum'])) {
        $stmt = $conn->prepare("SELECT SUM($column) AS sum FROM stud");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Sum of $column: " . $result['sum'] . "<br>";
    }

    if (isset($_POST['min'])) {
        $stmt = $conn->prepare("SELECT MIN($column) AS min FROM stud");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Minimum value of $column: " . $result['min'] . "<br>";
    }

    if (isset($_POST['max'])) {
        $stmt = $conn->prepare("SELECT MAX($column) AS max FROM stud");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Maximum value of $column: " . $result['max'] . "<br>";
    }

    if (isset($_POST['lowercase'])) {
        $stmt = $conn->prepare("SELECT LCASE($column) AS lowercase FROM stud");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Lowercase of $column: " . $result['lowercase'] . "<br>";
    }

    if (isset($_POST['uppercase'])) {
        $stmt = $conn->prepare("SELECT UCASE($column) AS uppercase FROM stud");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Uppercase of $column: " . $result['uppercase'] . "<br>";
    }
}
?>
