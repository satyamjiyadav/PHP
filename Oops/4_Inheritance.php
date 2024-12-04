<?php
 
// class Students{
//     function login(){
//         echo "studdent logged in";
//     }
// }

// class Teacher{
//     function login(){
//         echo "teacher logged in";
//     }
// }

// $s1 = new Students();
// $s1->login();

// echo "<br>";

// $t1 = new Teacher();
// $t1->login();


// papa ki properties extends ho rhi hai
 
// parent class
 class UserAuth{
     function login($userType){
         echo "$userType logged in";
     }    
 }

//  child class
class Students extends UserAuth{
  
}

class Teacher extends UserAuth{
    
}


$s1 = new Students();
$s1->login("satyam");

echo "<br>";

$t1 = new Teacher();
$t1->login("Amrita");


?>