<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "college";

$connection = new mysqli($host, $username, $password, $database);

if($connection -> connect_error){
    die("some error" . $connection -> connect_error);
}

echo "connection success";
echo "<br>";

$result = $connection->query("show tables") -> fetch_all();
print_r($result);
?>