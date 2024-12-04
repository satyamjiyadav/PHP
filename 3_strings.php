<?php
$x = "satyam yadav";
echo "hello $x";
echo "<br>";

//finding string length
echo strlen($x);
echo "<br>";

//word count of a string
echo str_word_count("hello dear mr vivek");
echo "<br>";

//search for text with in string
echo strpos("hello world this is new india" , "world");
echo "<br>";

//Uppercase
echo strtoupper($x);
echo "<br>";

//Lowercase
echo strtolower($x);
echo "<br>";

//replace string
echo str_replace("yadav" , "dolly", $x);
echo "<br>";


//reverse string
echo strrev($x);
echo "<br>";

//remove whitespace
$y = "  paras world  ";
echo trim($y);
echo "<br>";

//convert string into array
$z = explode(" ", $x);
print_r($z);
echo "<br>";

// concatnation 
$s  = $x . $y;
echo $s;  
echo "<br>";

//slicing string
echo substr($x,6,6);
echo "<br>";

//escape character
$t = "We are the so-called \"Vikings\" from the north.";
echo $t;
echo "<br>";

//Date
echo date(DATE_RFC822) . "<br>";
echo date("d/m/y");
?>