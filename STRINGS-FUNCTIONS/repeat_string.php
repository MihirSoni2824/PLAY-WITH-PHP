<?php
// Define the word to repeat
$word = "Hello";
// Create the repeated string using str_repeat and trim trailing space
$repeatedString = trim(str_repeat($word . " ", 5));
// Output the result
echo "Repeated String: " . $repeatedString . "\n";
?>
