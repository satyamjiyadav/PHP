<?php
    $a = 12;
    $b = 14;
    $c = 20;
    if($a > $b && $a > $c)
        echo "<h1>$a</h1>";
    elseif($b > $a && $b > $c)
        echo "<h1>$b</h1>";
    else
        echo "<h1>$c</h1>";
?>