<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="user" placeholder="enter user name">
        <br>
        <br>
        <button name="btn" value="set">Set cookies</button>
        <br>
        <br>
        <button name="btn" value="display">Display cookies</button>
        <br>
        <br>
        <button name="btn" value="delete">Delete cookies</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['btn'])){
    if($_POST['btn'] == "set"){
        $val = $_POST['user'];
        // echo $val;
        setcookie("user",  $_POST['user'], time() + (3600));
        echo "cookie is set";
    }
    if($_POST['btn'] == "display"){
        if(isset($_COOKIE['user'])){
            $val = $_COOKIE['user'];
            echo $val;
        }
    }
    if($_POST['btn'] == "delete"){
        if(isset($_COOKIE['user'])){
            setcookie("user",null,-1);
        }
    }
}
?>