<?php
// echo "hello";
// echo "user name is : " , $_POST['user_name'];
// echo "<br>";
// echo "user password is : " ,$_POST['user_password'];
// print_r($_POST);
if($_POST){
    echo "user name is : " . $_POST['user_name'];
    echo "<br>";
    echo "user password is : " . $_POST['user_pass'];
}
?>