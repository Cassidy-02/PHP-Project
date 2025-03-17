<?php
include 'homepage.php';
?>
<html>
<head>
	<title>Login</title>
</head>

<style>
	body{
		text-align: center;
		background-color: grey;
	}

	</style>
<body>

	<h1>Welcome to Login Page</h1>
	<h2>Please fill in your login details</h2>
	<form method="POST" action="product_listing.php">
		<label for="email">Email:</label>
		<input type="email" name="email" required><br>

		<label for="student_number">Student Number:</label>
		<input type="student_number" name="student_number" required><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br>

		<input type="submit" value="Login"> 
    </form>

    <h2>If you do not have an account click registration button</h2>
    <form method="POST" action="Registration.php">
    	<input type="submit" value="Register">
    </form>

    <h1>OR</h1>

    <h2>If you are Adminstration please click the button.</h2>
    <form method="POST" action="AdminLogin.php">
    	<input type="submit" value="Adminstration">
    </form>
</body>
</html>