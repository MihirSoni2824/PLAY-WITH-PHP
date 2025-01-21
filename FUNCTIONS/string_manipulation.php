<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace Vowels</title>
</head>
<body>
    <h1>Replace Vowels in a String</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br><br>
        <label for="replacementChar">Enter a replacement character:</label><br>
        <input type="text" id="replacementChar" name="replacementChar" maxlength="1" required><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    function replaceVowels($string, $replacement) {
        // Define a pattern to match vowels (both uppercase and lowercase)
        $pattern = '/[aeiouAEIOU]/';
        // Use preg_replace to replace vowels with the specified replacement character
        $result = preg_replace($pattern, $replacement, $string);
        return $result;
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $original = $_POST['inputString'];
        $replacementChar = $_POST['replacementChar'];

        $modified = replaceVowels($original, $replacementChar);
        echo "<h2>Result:</h2>";
        echo "<p><strong>Original:</strong> " . htmlspecialchars($original) . "</p>";
        echo "<p><strong>Modified:</strong> " . htmlspecialchars($modified) . "</p>";
    }
    ?>
</body>
</html>
