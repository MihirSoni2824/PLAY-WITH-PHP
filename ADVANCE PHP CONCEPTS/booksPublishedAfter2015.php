<?php
$library = [
    ['title' => 'Book 1', 'author' => 'Author 1', 'year' => 2016],
    ['title' => 'Book 2', 'author' => 'Author 2', 'year' => 2014],
    ['title' => 'Book 3', 'author' => 'Author 3', 'year' => 2019],
    ['title' => 'Book 4', 'author' => 'Author 4', 'year' => 2020]
];

foreach ($library as $book) {
    if ($book['year'] > 2015) {
        echo "Title: " . $book['title'] . ", Author: " . $book['author'] . ", Year: " . $book['year'] . "<br>";
    }
}
?>
