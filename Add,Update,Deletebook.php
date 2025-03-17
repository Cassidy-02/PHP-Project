<?php
include 'homepage.php';
//Add database connection
$conn = mysqli_connect("localhost","root","","bookstore");

//Check the connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
?>

<html>
<head>
    <title>Addbook</title>
</head>

<style>
    body{
        text-align: center;
        background-color: grey;
    }

    </style>
<body>
    <h1>Add A Book</h1>
    <h3>Please fill in user details:</h3>

    <form method="POST" action="AdminPage.php">
      <label for="name">Title of book:</label>
      <input type="text" id="$title" name="name" required><br><br>
      
      <label for="name">Author:</label>
      <input type="text" id="$author" name="name" required><br><br>
      
      <input type="submit" value="Add A Book">
    </form>
    <?php
//Function to add a book
function addBook($title,$author){
	global $conn;
	$query = "INSERT INTO books (title, author) VALUES ('$title', '$author')";
    mysqli_query($conn, $query);
}
?>
</body>
</html>

<html>
<head>
    <title>Deletebook</title>
</head>

<style>
    body{
        text-align: center;
        background-color: grey;
    }

    </style>
<body>
    <h1>Delete A Book</h1>
    <h3>Please fill in user details:</h3>

    <form method="POST" action="AdminPage.php">
      <label for="name">Title of book:</label>
      <input type="text" id="$title" name="name" required><br><br>
      
      <label for="name">Author:</label>
      <input type="text" id="$author" name="name" required><br><br>

      <label for="name">Book Id:</label>
      <input type="text" id="$bookId" name="name" required><br><br>
      
      <input type="submit" value="Delete A Book">
    </form>
    <?php
// Function to delete a book
function deleteBook($bookId) {
    global $conn;
    $query = "DELETE FROM books WHERE id = '$bookId'";
    mysqli_query($conn, $query);
}
?>
</body>
</html>


<html>
<head>
    <title>Updatebook</title>
</head>

<style>
    body{
        text-align: center;
        background-color: grey;
    }

    </style>
<body>
    <h1>Update A Book</h1>
    <h3>Please fill in user details:</h3>

    <form method="POST" action="AdminPage.php">
      <label for="name">Title of book:</label>
      <input type="text" id="$title" name="name" required><br><br>
      
      <label for="name">Author:</label>
      <input type="text" id="$author" name="name" required><br><br>

      <label for="name">Book Id:</label>
      <input type="text" id="$bookId" name="name" required><br><br>
      
      <input type="submit" value="Update A Book">
    </form>
    <?php
// Function to update a book
function updateBook($bookId, $title, $author) {
    global $conn;
    $query = "UPDATE books SET title = '$title', author = '$author' WHERE id = '$bookId'";
    mysqli_query($conn, $query);
} ?>
</body>
</html>

