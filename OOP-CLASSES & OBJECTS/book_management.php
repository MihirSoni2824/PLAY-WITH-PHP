<?php
class Book {
    // Properties
    private $title;
    private $author;
    private $price;

    // Constructor to initialize the book
    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    // Method to get book details
    public function getDetails() {
        return "Title: " . $this->title .
               ", Author: " . $this->author .
               ", Price: $" . number_format($this->price, 2);
    }
}

// Example usage
$book = new Book("To Kill a Mockingbird", "Harper Lee", 15.99);
echo $book->getDetails();
?>
