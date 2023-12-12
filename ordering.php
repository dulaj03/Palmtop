<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $selectedProduct = $_POST["product"];
    $quantity = $_POST["quantity"];

    // Validate form data (you may add more validation as needed)
    if (empty($selectedProduct) || !is_numeric($quantity) || $quantity <= 0) {
        $_SESSION["error_message"] = "Invalid input. Please provide valid information.";
        header("Location: ordering_page.php"); // Redirect back to the ordering page
        exit();
    }

    // Process the order (you may insert this data into a database or perform other actions)
    $orderDetails = "Product: $selectedProduct, Quantity: $quantity";

    // For demonstration purposes, we'll store the order details in a session variable
    $_SESSION["order_details"] = $orderDetails;

    // Redirect to a confirmation page
    header("Location: confirmation_page.php");
    exit();
}
?>

<!-- HTML part of the ordering page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering Page</title>
    <!-- Include your Bootstrap CSS link here -->
</head>
<body>
    <h1>Ordering Page</h1>

    <?php
    // Display error message if any
    if (isset($_SESSION["error_message"])) {
        echo '<p style="color: red;">' . $_SESSION["error_message"] . '</p>';
        unset($_SESSION["error_message"]);
    }
    ?>

    <!-- Your ordering form goes here -->
    <form method="post" action="">
        <!-- Product selection dropdown -->
        <label for="product">Select a product:</label>
        <select name="product" id="product">
            <option value="product1">Product 1</option>
            <option value="product2">Product 2</option>
            <!-- Add more options as needed -->
        </select>

        <!-- Quantity input -->
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>

        <!-- Submit button -->
        <button type="submit">Place Order</button>
    </form>

    <!-- Include your Bootstrap JS and other scripts here -->
</body>
</html>