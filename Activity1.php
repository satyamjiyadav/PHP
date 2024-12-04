<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p id = "net"></p>
    
<form action="" method="POST">
    <label>Item : </label>
    <input type="text" name="item" id="item">
    <label>Quatity : </label>
    <input type="text" name="qnt">
    <label>Price : </label>
    <input type="number" name="price" id="price">
    <button>ADD</button>
    <br><br><br><br>
    <label>Item : </label>
    <input type="text" name="item" id="item">   
    <label>New item : </label>
    <input type="text" name="item" id="item">   
    <button>Update</button>
    <br><br><br><br>
    <label>Item Name: </label>
    <input type="text" name="item" id="item">     
    <button>Delete</button>
    <br><br><br><br>
    <button>Total price</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $x = $_POST["item"];
    echo $x;
}
?>
</body>
</html>