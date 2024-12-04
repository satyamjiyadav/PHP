<?php
//var_dump is used to check data type

$x = 5;
$y = "hello";            
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";

$z = 10.365;
var_dump($z);
echo "<br>";

$cars = array("volvo" , "bmw", "toyota");
var_dump($cars);
echo "<br>";
echo "<br>";
echo "<br>";

//Objects in php
class Car{
    public $color;
    public $model;

    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return "My car is a ". $this->color . " " . $this->model . "!";
    } 
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

?>
