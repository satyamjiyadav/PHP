<?php

//switch
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";

//for loop

for($x = 0; $x<=10; $x++){
    echo "The number is : $x </br>" ;
}
echo "<br>";

$i = 1;
while ($i < 6) {
  echo $i . " ";
  $i++;
}
echo "<br>";

// fo Each
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}
?>