<?php
// Abstract class
abstract class Payment {
    // Abstract method to be implemented by child classes
    abstract public function makePayment($amount);
}
// Concrete class for Credit Card Payment
class CreditCardPayment extends Payment {
    private $cardNumber;
    // Constructor to initialize card number
    public function __construct($cardNumber) {
        $this->cardNumber = $cardNumber;
    }
    // Implementation of makePayment method
    public function makePayment($amount) {
        echo "Processing credit card payment of $$amount using card number: " . $this->cardNumber . "<br>";
    }
}
// Concrete class for PayPal Payment
class PayPalPayment extends Payment {
    private $email;
    // Constructor to initialize PayPal email
    public function __construct($email) {
        $this->email = $email;
    }
    // Implementation of makePayment method
    public function makePayment($amount) {
        echo "Processing PayPal payment of $$amount using email: " . $this->email . "<br>";
    }
}
// Example usage
$creditCardPayment = new CreditCardPayment("1234-5678-9012-3456");
$creditCardPayment->makePayment(100.50);
$payPalPayment = new PayPalPayment("user@example.com");
$payPalPayment->makePayment(250.75);
?>
