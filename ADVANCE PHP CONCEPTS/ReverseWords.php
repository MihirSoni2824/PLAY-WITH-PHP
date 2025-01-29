<?php
function reverseWords($sentence) {
    $words = explode(' ', $sentence);
    foreach ($words as &$word) {
        $word = strrev($word);
    }
    return implode(' ', $words);
}

// Example usage
echo reverseWords("Hello World");
?>
