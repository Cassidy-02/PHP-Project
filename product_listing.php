<?php

include ("homepage.php");

echo '<link rel="stylesheet" type="text/css" href="style.css">';

ob_start();

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


// Check if a product is added to the cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Add the product to the cart with the selected quantity
    $_SESSION['cart'][$product_id] = $quantity;
}

// Display the product listing
while ($row = $result->fetch_assoc()) {
    echo '<h2>' . $row['BookName'] . '</h2>';
    echo '<p>Price: $' . $row['price'] . '</p>';
    echo '<img src="data:image/jpg charset=utf-8;base64,'.base64_encode($row['bookimg']).'"style="width:100px; height:120px;">';
    
    // Create a form to add the product to the cart
    echo '<form method="post" action="">';
    echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
    echo 'Quantity: <input type="number" name="quantity" value="1" min="1"><br>';
    echo '<input type="submit" name="add_to_cart" value="Add to Cart">';
    echo '</form>';

    echo '<hr>';
}

// Check if the user wants to go to cart
if (isset($_POST['go_to_shoppingcart'])) {
    // Redirect the user cart page
    header('Location: cart.php');
    exit;
}
// Go to shopping cart button
    echo '<form method="post" action="">';
    echo '<input type="submit" name="go_to_shoppingcart" value="Show Shopping Cart">';
    echo '</form>';

?>