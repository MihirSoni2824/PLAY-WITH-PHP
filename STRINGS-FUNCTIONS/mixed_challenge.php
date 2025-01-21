<?php
$original_string = " PHP programming is both simple and versatile. ";
// 1. Trim leading and trailing spaces
$trimmed_string = trim($original_string);
// 2. Convert to uppercase
$uppercase_string = strtoupper($trimmed_string);
// 3. Count the total number of words
$word_count = str_word_count($trimmed_string);
// 4. Find the position of the word "SIMPLE" (case-insensitive)
$position = stripos($uppercase_string, "SIMPLE");
// 5. Repeat the trimmed string 3 times
$repeated_string = str_repeat($trimmed_string . "\n", 3);
// Output the results
echo "Original String: " . $original_string . "<br>";
echo "Trimmed String: " . $trimmed_string . "<br>";
echo "Uppercase String: " . $uppercase_string . "<br>";
echo "Word Count: " . $word_count . "<br>";
echo "Position of 'SIMPLE': " . ($position !== false ? $position : "Not Found") . "<br>";
echo "Repeated String:<br>" . $repeated_string;
?>
