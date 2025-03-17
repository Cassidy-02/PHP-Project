<?php

echo '<link rel="stylesheet" type="text/css" href="style.css">';

//Connected to database to save information
$conn = mysqli_connect("localhost","root","","bookstore");

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

// Start the session (if not already started)
session_start();

//Processses the information from the user submitted to sell the books
//Sell_books_form.php

//validate and sanitiza input data
$title =$_POST['title'];
$author =$_POST['author'];
$image =$_POST['image'];

//Upload the image file
$imageDir = 'book_images/';
$imagePath = $imageDir . $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

//Send an email to the admin/librarian
$admin_email = "admin@example.com";
$admin_subject = "New Book Request";
$admin_message = "Hello! I have a request to sell a book. Title:$title\nAuthor:$author\nImage:$imagePath";
mail($adminEmail, $adminSubject,$adminMessage);

//Send Confirmation Email to the user
$userEmail = $_POST['email']; //sends to email user entered in the form
$userSubject = 'Book Selling Request Confirmation';
$userMessage = 'Thank you for your request.We will review it shortly.';
mail($userEmail, $userSubject, $userMessage);

//display a success message to the user
echo 'Your book selling request has been submitted successfully';

	?>