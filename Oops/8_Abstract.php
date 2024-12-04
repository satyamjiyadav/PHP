<?php
// Blueprint
// template that defines methods for a child class
// in Abstract class, we declare methods but write implementation in child class

// ABstract class{
    // abstract engine
    // abstract wheel
    // abstract gears
    // abstract petrol tank
    // abstract body
// }

// child classes for{
        // abstract engine
    // abstract wheel
    // abstract gears
    // abstract petrol tank
    // abstract body
// }


abstract class ProductFeature {
    // Abstract method declarations
    abstract function productDetails();
    abstract function productImage();
    abstract function productOwnerDetail();
}

// Child class must implement all abstract methods from the parent abstract class.
class UploadProduct extends ProductFeature {
    // Implementing the abstract method from the parent class
    function productDetails() {
        echo "Samsung iPhone 16<br>";
    }

    // Implementing all remaining abstract methods
    function productImage() {
        echo "Product image uploaded successfully.<br>";
    }

    function productOwnerDetail() {
        echo "Owner: John Doe<br>";
    }
}

// We cannot instantiate an abstract class, but we can create an object of its child class.
$upload = new UploadProduct();
$upload->productDetails();       // Output: Samsung iPhone 16
$upload->productImage();         // Output: Product image uploaded successfully.
$upload->productOwnerDetail();  

?>