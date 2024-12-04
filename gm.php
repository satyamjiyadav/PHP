<?php
if($_POST)
{
    $num = $_POST['num'];
    echo "Welcome to the game !"."<br>"."<br>";
    while(true)
    {
        $n= rand(1,100);

        echo "guessed number is ".$n."<br>"."<br>";

        if($n == $num)
        {
            echo "Congratulations you found the number $num" ."<br>";
            break;
        }
        else if($n < $num)
        {
            echo "Your guessed number is too Low"."<br>"."<br>";
        }
        else{
            echo "your guessed number is high"."<br>"."<br>";
        }
    }
}
?>