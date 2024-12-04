<?php

function Add($a, $b, $c){
    echo $a+$b+$c;
}

Add(5,10,15);
echo "<br>";
function sum($a, $b, $c=40){
    echo $a+$b+$c;
}
sum(5,10);
echo "<br>";
function len($str){
    echo (strlen($str));
}

// calculating length of eachh string
$colors = array("red", "green", "blue", "yellow");
for($i=0; $i<count($colors); $i++){
    echo len($colors[$i])." ";
}
echo "<br>";


//variadic function
function  mult(...$numbers){
    $res = 1;
    foreach($numbers as $num){
        $res *= $num;
    }

    echo $res;
}

echo "Multiplication of 1,4,5 numbers is : " , mult(1,4,5,6 );

echo "<br>";

// Display data into table
$users = [[1,"satyam","satyam@gmail"], [2,"shivam","shivam@gmail"], [3,"aman","aman@gmail"]];

echo "<table border=1>";
for($i = 0; $i < count($users); $i++){
    echo "<tr>";
    for($j=0; $j<count($users[$i]); $j++){
        echo "<td>";
        echo $users[$i][$j];
        echo "<td/>";
    }
    echo "<tr/>";
}

echo "<table/>";

echo "<br>";

foreach($users as $i){
    print_r($i);
    echo "<br>";
}

?>