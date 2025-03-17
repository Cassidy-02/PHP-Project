<?php

include ("homepage.php");
echo '<link rel="stylesheet" type="text/css" href="style.css">';

//Connected to database to save information
$conn = mysqli_connect("localhost","root","","bookstore");

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

// Start the session (if not already started)
session_start();

?>

<html>
<head>
    <title>Apply</title>
    </head>

    <style>
	body{
		text-align: center;
		}

	</style>

    <body>
    	<h2>Please fill in your details and upload an image for processing</h2>
        <form method="POST" action="Process_request.php">

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="title">Title:</label>
        <input type="title" name="title" required><br>

        <label for="author">Author:</label>
        <input type="author" name="author" required><br>

        <label for="image">Image:</label>
        <input type="file" name="image" id="author" required><br>

        <input type="submit" value="Submit">

    </form>
    </body>

        </html>