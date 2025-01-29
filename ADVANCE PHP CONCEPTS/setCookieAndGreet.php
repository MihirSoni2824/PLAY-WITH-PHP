<?php
if (isset($_COOKIE['username'])) {
    echo "Hello, " . $_COOKIE['username'] . "!";
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        setcookie('username', $_POST['username'], time() + 3600);
        echo "Cookie set! Hello, " . $_POST['username'] . "!";
    } else {
        echo '<form method="POST">
                Enter your name: <input type="text" name="username">
                <input type="submit" value="Submit">
              </form>';
    }
}
?>
