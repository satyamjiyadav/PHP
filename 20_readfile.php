<!-- <?php
// $file ="files/xyz.txt";

// $myfile = fopen($file, "r") or die("this file is not available");

// echo fread($myfile, filesize($file));
// fclose($myfile);
?> -->
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="filename" placeholder="enter file name">
        <br><br>
        <button>Read</button>
    </form>
</body>
</html> -->

<!-- when we want to read with name of file -->
<!-- <?php

// if(isset($_POST['filename'])){
//     $file= "files/".$_POST['filename'];

//     $myfile = fopen($file , "r") or die("There is an problem with opening this file");

//     echo fread($myfile , filesize($file));

//     fclose($myfile);
// }
?> -->

<!-- if we want to choose file from storage to read -->

<form action="" method="post" enctype="multipart/form-data">
         <input type="file" name="filename">
        <br><br>
        <button>Read</button>
</form>

<?php
if(isset($_FILES['filename'])){
    $file = $_FILES['filename']['tmp_name'];
    $myfile = fopen($file , "r") or die("there is an problem with opening");
    echo fread($myfile, filesize($file));
    fclose($myfile);
}
?>