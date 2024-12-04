
<!-- automatic -->
<form action="" method="post">
    <input type="text" name="name" placeholder="enter name">
    <br>
    <br>
    <input type="text" name="course" placeholder="enter course">
    <br>
    <br>    
    <input type="text" name="batch" placeholder="enter batch">
    <br>
    <br>
    <input type="text" name="city" placeholder="enter city">
    <br>
    <br>
    <input type="text" name="year" placeholder="enter year">
    <br>
    <br>
    <button>Add new student</button>
</form>

<?php

if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $course =  $_POST['course'];
    $batch =  $_POST['batch'];
    $city =  $_POST['city'];
    $year =  $_POST['year'];


include("./3config.php");

echo "<br>";


$student = $conn->prepare(
    "insert into `students` (`id`,`name`, `course`,`batch`,`city`,`year`)
    VALUES(NULL, '$name', '$course', '$batch', '$city' ,'$year')
    "
);

$result = $student->execute();

if($result){
    echo "Data inserted";
}
else{
    echo "Data not inserted ";
}

}
?>