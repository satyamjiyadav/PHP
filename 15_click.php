<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <button name="btn" value="btn1">Call function</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['btn'])){
    btnClickTest();
}

function btnClickTest(){
    echo "function called on button clicked";
}
?>