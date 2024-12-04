<!-- <?php
// $host = "localhost";
// $username= "root";
// $password = null;
// $dbname = "exam";

// try{
//     // php data object -> pdo
//     $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connection succeeful";
// }
// catch(PDOException $err) {
//     echo "There is some error : ". $err->getMessage();
// }

// echo "<br>";
// $result = $conn->query("show tables");

// while($row=$result->fetch(PDO::FETCH_NUM)){
//     print_r($row);
// }
?> -->

<?php
$host = "localhost";
$username = "root";
$password = ""; // Update with your MySQL password if any

try {
    // Connect to MySQL server (no database specified)
    $conn = new PDO("mysql:host=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL to create a new database
    $sql = "CREATE DATABASE new_database";

    // Execute the SQL query
    $conn->exec($sql);
    echo "Database 'new_database' created successfully!";
} catch (PDOException $e) {
    echo "Error creating database: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
