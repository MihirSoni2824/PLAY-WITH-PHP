<?php
function countWordOccurrences($paragraph) {
    $words = str_word_count(strtolower($paragraph), 1);
    $wordCount = array_count_values($words);
    echo "<table border='1'><tr><th>Word</th><th>Count</th></tr>";
    foreach ($wordCount as $word => $count) {
        echo "<tr><td>$word</td><td>$count</td></tr>";
    }
    echo "</table>";
}

// Example usage
$paragraph = "This is a test. This test is just a test.";
countWordOccurrences($paragraph);
?>
