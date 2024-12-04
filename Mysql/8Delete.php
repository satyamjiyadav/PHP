<?php
include('./3config.php');
echo "<br>";

// check in myadmin php
// $students = $conn->prepare("delete from students where id = '8'");
// echo $students->execute();


// Abb directly dikhega page pr
$students = $conn->prepare("select * from students");
$students->execute();

$result = $students->fetchAll();

// print_r($result);

echo "<table border='1'>";

foreach($result as $stud){
    echo "<tr>
     <td>".$stud['name']."</td>
     <td>".$stud['course']."</td>
     <td>".$stud['batch']."</td>
     <td>".$stud['city']."</td>
     <td>".$stud['year']."</td>

     <td> <form method='post'> 
     <button name=delete value=".$stud['id']. ">Delete </button> </form></td>
     <td> <a href='9Update.php?id=".$stud['id']."'>Edit</a> </td>
     </tr>";
}

echo "</table>";

if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $students = $conn->prepare("delete from students where id = '$id'");
if($students->execute()){
    echo "record deleted";
}
else{
    echo "record not deleted";
}
}

?>