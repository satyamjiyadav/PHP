<?php
$path = "files";
$items = scandir($path);
// we can remove same element using array diff
$items = array_diff($items , array("." , ".."));
// print_r($items);

foreach($items as $item){
    // echo $file;
    // if we want to open file
    echo "<a href=./files/$item>$item<a>";
    echo "<br>";
}
?>