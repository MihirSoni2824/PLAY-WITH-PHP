<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        echo "Welcome, " . $_SESSION['username'];
    } else {
        echo "Invalid credentials.";
    }
} else {
    if (isset($_SESSION['username'])) {
        echo "Welcome back, " . $_SESSION['username'];
    } else {
        echo '<form method="POST">
                Username: <input type="text" name="username">
                Password: <input type="password" name="password">
                <input type="submit" value="Login">
              </form>';
    }
}
?>
