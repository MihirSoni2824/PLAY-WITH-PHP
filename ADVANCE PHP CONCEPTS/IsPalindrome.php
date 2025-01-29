<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace("/[^a-zA-Z0-9]/", "", $str));
    return $str == strrev($str);
}

// Example usage
echo isPalindrome("madam") ? "Palindrome" : "Not Palindrome";
?>
