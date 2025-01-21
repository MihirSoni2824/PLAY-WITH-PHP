<?php
// Check if the form is submitted and number is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $number = (int)$_POST['number'];

    echo "<h2>Multiplication Table for $number</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    // Loop through 1 to 10 to print the multiplication table
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "<tr><td>$number x $i = $result</td></tr>";
    }

    echo "</table>";
} else {
    echo "<p>Please enter a number to see its multiplication table.</p>";
}
?>

<!-- HTML form to take user input -->
<form method="post" action="">
    <label for="number">Enter a number: </label>
    <input type="number" name="number" id="number" required>
    <input type="submit" value="Generate Table">
</form>
