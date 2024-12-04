<?php
include("./3config.php");

$getStudents = $conn->prepare("select * from students");
$getStudents->execute();
$students = $getStudents->fetchAll();
echo "<pre>";
// print_r($students);


echo "<table border='1'>";
foreach($students as $stud){
    echo "<tr>
    <td>" . $stud['name'] . "</td>
    <td>" . $stud['course'] . "</td>
    <td>" . $stud['batch'] . "</td>
    <td>" . $stud['city'] . "</td>
    <td>" . $stud['year'] . "</td>
    </tr>";
    echo "<br>";
}
echo "</table>";
?>