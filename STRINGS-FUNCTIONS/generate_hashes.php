<?php
// Define the original string
$originalString = "Secure Password123";
// Generate the MD5 hash
$md5Hash = md5($originalString);
// Generate the SHA1 hash
$sha1Hash = sha1($originalString);
// Display the results
echo "Original String: {$originalString}<br>";
echo "MD5 Hash: {$md5Hash}<br>";
echo "SHA1 Hash: {$sha1Hash}<br>";
?>
