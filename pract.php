<?php
if($_POST)
{
    $num = $_POST['num'];
    for($i = 1; $i <= 10; $i++)
    {
        echo "$num * $i = ".$i*$num."<br>";
    }
}
?>