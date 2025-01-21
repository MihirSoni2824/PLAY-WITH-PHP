<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate String Length</title>
</head>
<body>
    <h1>Calculate the Length of a String</h1>
    <form method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br><br>
        <button type="submit">Calculate Length</button>
    </form>
    <?php
    function calculateStringLength($string) {
        // Initialize a counter to keep track of the length
        $length = 0;
        // Iterate through each character in the string
        while (isset($string[$length])) {
            $length++;
        }
        return $length;
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $inputString = $_POST['inputString'];
        $length = calculateStringLength($inputString);
        echo "<h2>Result:</h2>";
        echo "<p><strong>String:</strong> " . htmlspecialchars($inputString) . "</p>";
        echo "<p><strong>Length:</strong> $length</p>";
    }
    ?>
</body>
</html>
