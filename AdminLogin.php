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
	<form method="POST" action="AdminPage.php">
		<label for="email">Email:</label>
		<input type="email" name="email" required><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br>

		<input type="submit" value="Login"> 
    </form>
</body>
</html>