<?php
// print_r($_GET);
// print_r($_REQUEST);
// echo "<br>";
// echo $_REQUEST['user_name'];

// foreach($_REQUEST as $data){
//     echo $data;
//     echo "<br>";
// }

// print_r ($_POST);
// foreach($_REQUEST as $key => $data){
//     if($data == ""){
//         echo "Error";
//         break;
//     }
//     else{
//         echo $key. " is " .$data;
//     }
    
//     echo "<br>";
// }

echo "name is : ", $_REQUEST['user_name'];
echo "<br>";
echo "password is " , $_REQUEST['user_pass'];
?>