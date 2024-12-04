<?php
    // Global Variables:
    $x=20;
    $y=40;
    function add() {
        global $x, $y; // TO use global variables locally
        return $x + $y;
    }
    echo add();

    // Static Keyword
    function myTest() {
        static $x = 0;
        echo "<br>".$x ;
        $x++;
    }
    myTest();
    myTest();
    myTest();
?>