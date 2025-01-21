<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Word Occurrences</title>
</head>
<body>
    <h1>Count the Word "PHP" in a String</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br><br>
        <button type="submit">Count "PHP"</button>
    </form>

    <?php
    function countWordPHP($string) {
        $word = "PHP";
        $count = 0;
        $words = explode(' ', $string); // Split the string into words

        foreach ($words as $w) {
            if (strcasecmp($w, $word) === 0) { // Case-insensitive comparison
                $count++;
            }
        }
        return $count;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $inputString = $_POST['inputString'];

        $phpCount = countWordPHP($inputString);

        echo "<h2>Result:</h2>";
        echo "<p><strong>Input String:</strong> " . htmlspecialchars($inputString) . "</p>";
        echo "<p><strong>Occurrences of \"PHP\":</strong> $phpCount</p>";
    }
    ?>
</body>
</html>
