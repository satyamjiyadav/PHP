<?php
class Properties{
    // public , private, protected
    public $name = "satyam yadav";
    function getName(){
        echo $this->name;
    }

    function updateName($name){
        $this->name = $name;
    }

}

$p1 = new Properties();

$p1->getName();

echo "<br>";

$p1->updateName("bruce");

echo "<br>";

$p1->getName();
?>