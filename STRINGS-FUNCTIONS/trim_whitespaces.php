<?php
// Define the original string
$originalString = " PHP Rocks! ";
// Apply trim to remove both leading and trailing whitespaces
$trimmedString = trim($originalString);
// Apply ltrim to remove only leading whitespaces
$leftTrimmedString = ltrim($originalString);
// Apply rtrim to remove only trailing whitespaces
$rightTrimmedString = rtrim($originalString);
// Display the results
echo "Original String: '{$originalString}'\n";
echo "After trim: '{$trimmedString}'\n";
echo "After ltrim: '{$leftTrimmedString}'\n";
echo "After rtrim: '{$rightTrimmedString}'\n";
?>
