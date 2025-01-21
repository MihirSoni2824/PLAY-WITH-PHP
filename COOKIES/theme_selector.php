<!-- index.php -->
<?php
// Check if the theme cookie is set; if not, default to 'light'
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Selector</title>
    <!-- Apply the theme based on the cookie value -->
    <style>
        body.light {
            background-color: #ffffff;
            color: #000000;
        }

        body.dark {
            background-color: #000000;
            color: #ffffff;
        }
    </style>
</head>
<body class="<?php echo htmlspecialchars($theme); ?>">
    <h1>Welcome to the Theme Selector</h1>
    <p>Choose your preferred theme:</p>
    <button onclick="setTheme('light')">Light Mode</button>
    <button onclick="setTheme('dark')">Dark Mode</button>

    <script>
        function setTheme(theme) {
            // Set a cookie to store the user's preferred theme
            document.cookie = `theme=${theme}; path=/; max-age=${60 * 60 * 24 * 30}`; // Cookie valid for 30 days
            // Reload the page to apply the selected theme
            location.reload();
        }
    </script>
</body>
</html>
