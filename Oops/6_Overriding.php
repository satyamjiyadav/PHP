<?php
//  overriding

class parentClass{
    function showmessage(){
        echo "ye parent class ka method hai";
    }
}

class childclass{
    function showmessage(){
        echo "ye child message ka method hai";
    }
}

$s1 = new parentClass();
$s1->showmessage();

echo "<br>";

$s2 = new childclass();
$s2->showmessage();

echo "<br>";
?>

<!-- Bhai, PHP me method overriding tab hoti hai jab ek child class
apne parent class ke method ko same naam aur signature ke sath
dubara define karti hai. Isse child class parent wali functionality
ko overwrite ya customize kar sakti hai. -->


<!-- real life example -->
<?php
class Payment {
    public function processPayment() {
        echo "Processing generic payment.\n";
    }
}

class CreditCardPayment extends Payment {
    public function processPayment() { // Overriding
        echo "Processing credit card payment.\n";
    }
}

class PayPalPayment extends Payment {
    public function processPayment() { // Overriding
        echo "Processing PayPal payment.\n";
    }
}

// Example usage:
$payment1 = new CreditCardPayment();
$payment1->processPayment(); // Output: Processing credit card payment.

echo "<br>";

$payment2 = new PayPalPayment();
$payment2->processPayment(); // Output: Processing PayPal payment.
?>
