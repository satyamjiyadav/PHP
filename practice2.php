<?php

// function Add($a, $b, $c){
//     echo $a+$b+$c;
// }
// Add(5,10,15);
// echo "<br>";
// function sum($a, $b, $c=40){
//     echo $a+$b+$c;
// }
// sum(5,10);
// echo "<br>";
// function len($str){
//     echo (strlen($str));
// }

// calculating length of eachh string
// $colors = array("red", "green", "blue", "yellow");
// for($i=0; $i<count($colors); $i++){
//     echo len($colors[$i])." ";
// }
// echo "<br>";


//variadic function
// function  mult(...$numbers){
//     $res = 1;
//     foreach($numbers as $num){
//         $res *= $num;
//     }

//     echo $res;
// }

// echo "Multiplication of 1,4,5 numbers is : " , mult(1,4,5);


//create a function that returns multiple values using a array
// $arr = array(10,12,14,5,11,7,9,13);
// 1 2 3 4 5 6 7 8 9 1 0 1 1 1 2 1 3 1 4 1 5 1 6 1 7 1 8 1 9 2 0 2 1 2 2 2 3 2 4 2 5 2 6 2 7 2 8 2 9 3 0

$users = [
    [1, "sat" , "ncr", "sagahh@gmail.com"],
    [2, "mon" , "noida", "sagahh@gmail.com"],
    [3, "tue" , "rajasthan", "sagahh@gmail.com"]
];

for( $i = 0; $i < count($users); $i++ ) 
{
    echo "* Row $i"."<br>";
    for( $j = 0; $j < count($users[$i]); $j++ )
    {
        echo $users[$i][$j];
        echo "<br>";
    }
    echo "<br>"."<br>";
}

$cars = array("ford" => "mg10", "mercd" => "glora120");

foreach($cars as $key => $value)
{
    echo "$key -> $value"."<br>";
}

$result = array(array("aman", 12 , "unnao"), array("aman", 12 , "unnao"),array("aman", 12 , "unnao"));

unset($result[0]);
for( $i = 0; $i < count($result); $i++ )    
{
    for($j = 0; $j < count($result[$i]); $j++ )
    {
        echo $result[$i][$j]." ";
    }
    echo "<br>"."<br>";
}

?>



