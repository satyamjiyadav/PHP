<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age = array("peter"=>35 , "Ben"=>37, "Joe"=>43);

    echo json_encode($age);
    echo "<br>";

    $jsonobj = '{"peter":35,"Ben":37,"Joe":43}';
    var_dump (json_decode($jsonobj));

    echo "<br>";
    // var_dump(12);
    ?>
</body>
</html>