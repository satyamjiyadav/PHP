
<form action="" method="post">
    <input type="text" name="search" placeholder="enter name">
    <br>
    <br>
    <button>Search</button>
</form>

<?php
include('./config.php');
echo "<br>";

if(isset($_POST['search'])){
    $search = $_POST['search'];

   
    $student = $conn->prepare("select * from students where name Like '$search%'");
    $student->execute();
    $result = $student->fetchAll();
    echo "<table border='1'>";
    foreach($result as $stud){
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
}
?>