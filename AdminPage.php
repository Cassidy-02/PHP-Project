
<?php
include 'homepage.php';
?>

<html>
<head>
	<title>AdminPage</title>

</head>

<style>
	body{
		text-align: center;
		background-color: grey;
	}

	</style>
<body>
	<h1>Welcome Admin</h1>
	<h3>Please choose an option:</h3>
	<form method="POST" action="Add,Delete,Updateuser.php">
		<h4>To add a user, update or delete a user click the button.</h4>
		<input type="submit" value="Add New User, Delete, Update">
	</form>

	<form method="POST" action="Add,Delete,Update.php">
         <h4>To add a book, update or delete a book click the button.</h4>
		<input type="submit" value="Add New Book, Update, Delete">
    </form>
</body>
</html>