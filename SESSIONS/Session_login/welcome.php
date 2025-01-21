<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in by verifying the 'username' session variable
if (isset($_SESSION['username'])) {
    // Display the welcome message
    echo "<h1>Welcome, " . $_SESSION['username'] . "!</h1>";
} else {
    // If the user is not logged in, redirect them to the login page
    header('Location: login.php');
    exit();
}
?>
