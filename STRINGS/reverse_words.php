<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Words in a Sentence</title>
</head>
<body>
    <h1>Reverse the Words in a Sentence</h1>
    <form method="post">
        <label for="inputSentence">Enter a sentence:</label><br>
        <input type="text" id="inputSentence" name="inputSentence" required><br><br>
        <button type="submit">Reverse Words</button>
    </form>

    <?php
    function reverseWords($sentence) {
        // Split the sentence into words
        $words = [];
        $word = "";
        for ($i = 0; $i < strlen($sentence); $i++) {
            if ($sentence[$i] !== ' ') {
                $word .= $sentence[$i];
            } else {
                if ($word !== "") {
                    $words[] = $word;
                    $word = "";
                }
            }
        }
        // Add the last word if it exists
        if ($word !== "") {
            $words[] = $word;
        }
        // Reverse the array of words
        $reversedWords = [];
        for ($i = count($words) - 1; $i >= 0; $i--) {
            $reversedWords[] = $words[$i];
        }
        // Join the reversed words into a string
        return implode(' ', $reversedWords);
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $inputSentence = $_POST['inputSentence'];

        $reversedSentence = reverseWords($inputSentence);

        echo "<h2>Result:</h2>";
        echo "<p><strong>Original Sentence:</strong> " . htmlspecialchars($inputSentence) . "</p>";
        echo "<p><strong>Reversed Sentence:</strong> " . htmlspecialchars($reversedSentence) . "</p>";
    }
    ?>
</body>
</html>
