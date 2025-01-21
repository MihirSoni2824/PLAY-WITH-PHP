<?php
// Define the sentence
$sentence = "Never stop learning PHP; it’s a lifelong journey to learn more.";
// Find the position of the first occurrence of the word "learn" using strpos
$word = "learn";
$position = strpos($sentence, $word);
// Output the result
if ($position !== false) {
    echo "The word '" . $word . "' is first found at position: " . $position . "<br>";
} else {
    echo "The word '" . $word . "' was not found in the sentence";
}
?>
