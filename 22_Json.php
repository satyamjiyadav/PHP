<?php
$user = ["name"=>"satyam" , "age" => 30 ,"friend" => "paras"];
// print_r($user);
$userJson = json_encode(($user));
echo $userJson;

$dataArray = json_decode($userJson, true);


echo "<br>";

print_r($dataArray);

?>