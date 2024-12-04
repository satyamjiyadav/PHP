<!-- <?php
// if want to create randomly
// $fileName = "dummy.txt";


// if want to create at any folder
// $fileName = "files/dummy.txt";
// $content = "this is a dummy file";

// $file = fopen($fileName , "w") or die("unable to create file");

// fwrite($file, $content);
// fclose($file);
// echo "file created";
?> -->

<!-- using html form-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="filename" placeholder="enter file name">
        <br>
        <br>
        <textarea name="content"></textarea>
        <br>
        <br>
        <button>Create</button>
    </form>
</body>
</html>


<?php
if(isset($_POST['filename'])){
    $fileName = "files/".$_POST['filename'];
    $content =$_POST['content'];

    $file = fopen($fileName , "w") or die("unable to create file");

    fwrite($file, $content);
    fclose($file);
    echo "file created";
}
?>