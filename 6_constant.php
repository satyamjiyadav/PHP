<?php

define("Greeting" ,"welcome to lpu");
echo Greeting;
echo "<br>";

const mycar = "volvo";
echo mycar;
echo "<br>";

define("cars" , ["alto" , "nano" , "dzire"]);
echo cars[0];
echo "<br>";

//function
function greet(){
    echo Greeting;
}
greet();
?>