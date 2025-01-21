<?php
// Start the session
session_start();

// Set the timeout duration (5 minutes)
$timeout_duration = 5 * 60; // 5 minutes in seconds

// Check if the session 'last_activity' is set
if (isset($_SESSION['last_activity'])) {
    // Calculate the time elapsed since the last activity
    $session_life = time() - $_SESSION['last_activity'];

    // If the session has been inactive for more than the timeout duration, destroy the session
    if ($session_life > $timeout_duration) {
        // Destroy the session
        session_unset();
        session_destroy();
        header('Location: login.php'); // Redirect to login page or any other page
        exit();
    }
}

// Update the 'last_activity' session variable to the current time
$_SESSION['last_activity'] = time();
?>

<!-- Your content here -->
<h1>Welcome to your account!</h1>
<p>Session is active.</p>







