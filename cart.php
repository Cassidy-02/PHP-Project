<?php

include ("homepage.php");
echo '<link rel="stylesheet" type="text/css" href="style.css">';

$conn = mysqli_connect("localhost","root","","cart_item");

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

// Start the session (if not already started)
session_start();

// Check if the shopping cart is not already initialized
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

//Retrieve products from the database
$sql = "SELECT * FROM cart_item";
$result = $conn->query($sql);

// Check if a product is removed from the cart
if (isset($_GET['remove_from_cart'])) {
    $product_id = $_GET['remove_from_cart'];

    // Remove the product from the cart
    unset($_SESSION['cart'][$product_id]);
}

// Check if the user wants to continue shopping
if (isset($_POST['continue_shopping'])) {
    // Redirect the user back to the product listing page
    header('Location: product_listing.php');
    exit;
}

// Display the shopping cart
echo '<h2>Shopping Cart</h2>';

if (!empty($_SESSION['cart'])) {
    echo '<table>';
    echo '<tr><th>Product</th><th>Quantity</th><th>Price</th><th>Total</th><th>Action</th></tr>';

     foreach ($_SESSION['cart'] as $product_id => $quantity) {
        // Retrieve the product details from the database
        $sql = "SELECT * FROM cart_item WHERE id = '$product_id'";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();

        echo '<tr>';
        echo '<td>' . $product['BookName'] . '</td>';
        echo '<td>' . $quantity . '</td>';
        echo '<td>$' . $product['price'] . '</td>';
        echo '<td>$' . ($product['price'] * $quantity) . '</td>';
        echo '<td><a href="?remove_from_cart=' . $product_id . '">Remove</a></td>';
        echo '</tr>';
    }

    echo '</table>';

    // Continue shopping option
    echo '<form method="post" action="">';
    echo '<input type="submit" name="continue_shopping" value="Continue Shopping">';
    echo '</form>';
} else {
    echo '<p>Your cart is empty.</p>';
    // Continue shopping option
    echo '<form method="post" action="">';
    echo '<input type="submit" name="continue_shopping" value="Continue Shopping">';
    echo '</form>';
}

// Checkout option
echo '<h2>Checkout</h2>';
// Check if the user wants to continue shopping
if (isset($_POST['checkout'])) {
    // Redirect the user back to the product listing page
    header('Location: Login.php');
    exit;
}

if (!empty($_SESSION['cart'])) {
    echo '<table>';
    echo '<tr><th>Books</th></tr>';

     foreach ($_SESSION['cart'] as $product_id => $quantity) {
        // Retrieve the product details from the database
        $sql = "SELECT * FROM cart_item WHERE id = '$product_id'";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();
    

    echo '<tr>';
    echo '<td>' .$product['BookName']. '</td>';
    echo '</tr>';
}
    echo '</table>';
    } else {
     echo '<p>You have checked out:</p>';
}
 echo '<form method="post" action="">';
    echo '<input type="submit" name="checkout" value="Checkout">';
    echo '</form>';
?>
