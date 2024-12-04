<?php
include("./3config.php");

echo "<br>";

$getStudent = $conn->prepare("select id,name from students");
$getStudent->execute();


$studentData = $getStudent->fetchAll();

echo "<select>";
echo "<option>Select Name</option>";
// see in inspect -> element -> select
foreach($studentData as $stud){
    echo "<option value=".$stud['id'].">".$stud['name']."</option>";
}

echo "</select>"
// print_r($studentData);
?>