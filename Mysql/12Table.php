<?php
include('./3config.php');

echo "<br>";

// $sql = "CREATE TABLE Ecommerce (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     Product VARCHAR(100),
//     price VARCHAR(100),
//     stock VARCHAR(50)
// )";

// if($conn->query($sql) === TRUE){
//     echo "Table is created";
// }
// else{
//     echo "Error aa rhi hai";
// }


$dt = $conn->prepare(
    "insert into Ecommerce(Product, price, stock)  VALUES
('Shirt', '500', '15'),
('Jeans', '500', '15'),
('Hanky', '500', '15'),
('Press', '500', '15'),
('Formal', '500', '15'),
('Informal', '500', '15');"
);

$result = $dt->execute();

if($result){
    echo "Data inserted";
}
else{
    echo "Data not inserted ";
}
?>