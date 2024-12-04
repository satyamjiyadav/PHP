<?php
// super global in php are pre-defined but global variables ko hmm define krte hai
$a  = 10;
echo "<pre>";
// print_r(($GLOBALS));


// The $_SERVER superglobal in PHP is an associative array that contains
//  information about the server and the current request environment.
// print_r($_SERVER);
// print_r($_SERVER['REQUEST_URI']);
print_r($_REQUEST);
echo "<pre>";
?>