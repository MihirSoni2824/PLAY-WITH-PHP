<?php
function countVowels($str) {
    $vowels = "aeiouAEIOU";
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (strpos($vowels, $str[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}

// Example usage
echo countVowels("Hello World");
?>
