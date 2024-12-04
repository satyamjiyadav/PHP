<?php
// it is a super global variable
print_r(value: $_FILES);

// echo "<br>";

if($_FILES['fileupload']){
    // fetch file path
    $path = $_FILES['fileupload']['name'];
    echo $path;
    echo "<br>";
    $upload_path = "./uploads/".$path;
    echo $upload_path;

    move_uploaded_file($_FILES['fileupload']['tmp_name'], $upload_path)
    || die("failed to upload");
}
else{
    die("no file found");
}
?>