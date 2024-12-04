<?php
// in php we can make only one constructor for one class
class ConstructorDemo{
    
    public $name;
    function setName(){
        echo "hello";
    }

    // constructor automatically called ho jaata hai
    function __construct(){
        // echo "constructor called";
        $this->name = "satyam yadav";
    }

    function displayname(){
        echo $this->name;
    }
}

$cd = new ConstructorDemo();
// $cd->setName();
$cd->displayname();
?>