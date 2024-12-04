

<!-- manual filling -->
<?php
include("./3config.php");

echo "<br>";


$student = $conn->prepare(
    "insert into `students` (`id`,`name`, `course`,`batch`,`city`,`year`)
    VALUES(NULL, 'viki', 'm.com', 'k22fd', 'Unnao' ,'3rd')
    "
);

$result = $student->execute();

if($result){
    echo "Data inserted";
}
else{
    echo "Data not inserted ";
}
?>