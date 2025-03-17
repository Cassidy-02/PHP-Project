<?php

include ("homepage.php");
echo '<link rel="stylesheet" type="text/css" href="style.css">';

session_start();

//Check if the cart exists in the session
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
	echo "No items found in the cart.";
	exit;
}

//Retrieve the cart data from the session
$cart = $_SESSION['cart'];

//Display the history page
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Shopping Cart History</title>
	<style>
		table {
			width:100%;
			border-collapse:collapse;
		}

		th,td {
			padding:8px;
			text-align:left;
			border-bottom:1px soild #ddd;
		}

		th {
			background-color: black;
		}
	</style>
</head>
<body>
	<h1>Shopping Cart History</h1>
	<table>
		<thead>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Subtotal</th>
			</tr>
		</thead>
		<tbody>

			<?php
		
			$shopping = "SELECT * FROM cart";
			$result = $shopping; 

			$total = 0;			
			foreach($cart as $product_id) {
				$shopping = "SELECT * FROM cart WHERE id = '$product_id'";
                $result = $shopping;
                $product = $result;

				/*$product = $cart['product'];
				$quantity = $cart['quantity'];
				$price = $cart['price'];
				$subtotal = $quantity * $price;
				$total += $subtotal; */

				echo '<tr>';
				echo '<td>'.$product['product_id'].'</td>'; 
				echo '<td>'.$quantity.'</td>';
				echo '<td>'.$product['$price'].'</td>';
				echo '<td>'.$subtotal($product['price'] * $quantity).'</td>';
				echo '</tr>';
			}
			?>

			<tr>
                <td colspan="3"><strong>Total</strong></td>
                <td><?php echo $total; ?></td>
            </tr>
	</table> 

</body>
</html>