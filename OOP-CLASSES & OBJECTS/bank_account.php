<?php
class BankAccount {
    // Properties
    private $accountNumber;
    private $balance;
    // Constructor to initialize the account
    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }
    // Method to get the account number
    public function getAccountNumber() {
        return $this->accountNumber;
    }

    // Method to get the balance
    public function getBalance() {
        return $this->balance;
    }
    // Method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount. New balance: " . $this->balance . "<br>";
        } else {
            echo "Deposit amount must be positive.<br>";
        }
    }
    // Method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                echo "Withdrew: $amount. New balance: " . $this->balance . "<br>";
            } else {
                echo "Insufficient balance. Current balance: " . $this->balance . "<br>";
            }
        } else {
            echo "Withdrawal amount must be positive.<br>";
        }
    }
}

// Example usage
$account = new BankAccount("123456789", 500); // Create a new account with initial balance
echo "Account Number: " . $account->getAccountNumber() . "<br>";
echo "Initial Balance: " . $account->getBalance() . "<br>";

$account->deposit(200); // Deposit money
$account->withdraw(100); // Withdraw money
$account->withdraw(700); // Attempt to withdraw more than the balance
?>
