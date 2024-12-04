<?php
class MathOperations{
    // vriables ko bolte hai properties
    // functions ko bolte hai methods class me

    function sum($a, $b){
        echo $a+$b;
    }
    function mul($a, $b){
        echo $a*$b;
    }
}


// objects
$maths = new MathOperations();
$maths->sum(100,15);
echo "<br>";
$maths->sum(40,15);
echo "<br>";
$maths->mul(4,15);
?>