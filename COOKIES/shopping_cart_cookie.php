<!-- cart.php -->
<?php
// Retrieve the cart items from the cookie, or initialize as an empty array
$cartItems = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <h2>Available Items</h2>
    <ul>
        <li>Item 1 <button onclick="addToCart('Item 1')">Add to Cart</button></li>
        <li>Item 2 <button onclick="addToCart('Item 2')">Add to Cart</button></li>
        <li>Item 3 <button onclick="addToCart('Item 3')">Add to Cart</button></li>
    </ul>

    <h2>Items in Your Cart</h2>
    <ul id="cartItems">
        <?php if (!empty($cartItems)): ?>
            <?php foreach ($cartItems as $item): ?>
                <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>Your cart is empty.</li>
        <?php endif; ?>
    </ul>

    <script>
        // Function to add an item to the cart
        function addToCart(item) {
            // Get existing cart from cookies
            let cart = JSON.parse(getCookie('cart') || '[]');

            // Add the new item to the cart
            cart.push(item);

            // Store the updated cart in the cookie
            document.cookie = `cart=${JSON.stringify(cart)}; path=/; max-age=${60 * 60 * 24 * 30}`; // Valid for 30 days
            // Reload the page to update the displayed cart
            location.reload();
        }
        // Function to retrieve a cookie by name
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }
    </script>
</body>
</html>
