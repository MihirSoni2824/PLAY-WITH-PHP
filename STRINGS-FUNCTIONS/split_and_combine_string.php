<?php
// Define the sentence
$sentence = "PHP is fun to learn";

// Step 1: Split the sentence into an array of words using explode
$wordsArray = explode(" ", $sentence);

// Step 2: Join the array back into a single string with hyphens using implode
$hyphenatedString = implode("-", $wordsArray);

// Output the result
echo "Original Sentence: " . $sentence . "<br>";
echo "Hyphenated String: " . $hyphenatedString . "<br";
?>
