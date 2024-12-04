<?php
$host = "localhost";
$username = "root";
// php data object 
$password = null;

$conn = new PDO("mysql:host=$host;dbname=college",$username,$password);
$conn->setAttribute((PDO::ATTR_ERRMODE), PDO::ERRMODE_EXCEPTION);
echo "connection successful";
?>