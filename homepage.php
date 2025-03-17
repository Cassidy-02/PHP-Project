<!DOCTYPE HTML>

<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>

	/*A black background colour to the top nav */
.topnav {
		background-color: black;
		overflow: hidden;
	}
	/*Links inside the nav bar */
    .topnav a {
	   float: left;
	   color: white;
	   text-align: center;
	   padding: 40px 50px;
	   text-decoration: none;
	   font-size: 17px;
    } 

    /*Colour of links on hover*/
    .topnav a:hover {
    	background-color: skyblue;
    	color:black;
    }

    /*Colour to the active link*/
    .topnav a.active {
    	background-color:darkblue;
    	color: white;
    }


</style>

<body>
	<div class="topnav">
		<a class="active"
		<a href="homepage.php">Home</a>
		<a href="product_listing.php">Books</a>
        <a href="cart.php">Shopping Cart</a>
        <a href="checkout_history.php">Cart History</a>
        <a href="Sell_books_form.php">Sell Books</a>

        <a href="Login.php">Login</a>
        <a href="Registration.php">Registration</a>
        <a href="AdminLogin.php">Login Admin</a>      
    </div>

</body>
</html>


		