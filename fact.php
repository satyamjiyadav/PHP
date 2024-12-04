<?php
if($_POST)
{
    $num = $_POST["fct"];
    $ans = 1;

    for($i = 1; $i <= $num; $i++)
    {
        $ans = $ans * $i;
    }

    echo "Factorial of $num is " . $ans;
}
?>