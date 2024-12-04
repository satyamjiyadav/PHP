<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="user" placeholder="type user name">
        <br>
        <br>
        <button name="btn" value="set">Set</button>
        <br>
        <br>
        <button name="btn" value="get">Get</button>
        <br>
        <br>
        <button name="btn" value="delete">Delete</button>
    </form>
</body>
</html>

<?php

session_start();

if(isset($_POST['btn'])){
    if($_POST['btn'] == 'set'){
        $val = $_POST['user'];
        $_SESSION['user'] = $val;
    }

    if($_POST['btn'] == 'get'){
        $val = $_POST['user'];
        echo $_SESSION['user'];
    }

    if($_POST['btn'] == 'delete'){
        session_destroy();
    }
}
?>