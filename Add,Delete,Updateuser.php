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
    <title>Adduser</title>
</head>

<style>
    body{
        text-align: center;
        background-color: grey;
    }

    </style>
<body>
    <h1>Add New User</h1>
    <h3>Please fill in user details:</h3>

    <form method="POST" action="AdminPage.php">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="$username" name="email" required><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="$hashedpassword" name="password" required><br><br>
      <input type="submit" value="Add New User">
    </form>
    <?php 
    function addUser($username, $password) {
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    mysqli_query($conn, $query);
} 
?>
    </body>
    </html>

<html>
<head>
    <title>Deleteuser</title>
</head>

<style>
    body{
        text-align: center;
        background-color: grey;
    }

    </style>
<body>
    <h1>Delete a User</h1>
    <h3>Please fill in user details:</h3>

    <form method="POST" action="AdminPage.php">
      <label for="name">User Id:</label>
      <input type="text" id="$userId" name="name" required><br><br>
      
      <input type="submit" value="Delete User">
    </form>
<?php
// Function to delete a user
function deleteUser($userId) {
    global $conn;
    $query = "DELETE FROM users WHERE id = '$userId'";
    mysqli_query($conn, $query);
} ?>
</body>
</html>

<html>
<head>
    <title>Updateuser</title>
</head>

<style>
    body{
        text-align: center;
        background-color: grey;
    }

    </style>
<body>
    <h1>Update User</h1>
    <h3>Please fill in user details:</h3>

    <form method="POST" action="AdminPage.php">
      <label for="$userId">User Id:</label>
      <input type="text" id="$userId" name="$userId" required><br><br>
      
      <label for="$username">Username:</label>
      <input type="email" id="$username" name="$username" required><br><br>

      <label for="$hashedpassword">Password:</label>
      <input type="$hashedpassword" id="$hashedpassword" name="$hashedpassword" required><br><br>
      
      <input type="submit" value="Update User">
    </form>
<?php
// Function to update a user
function updateUser($userId, $username, $hashedpassword) {
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE users SET username = '$username', password = '$hashedPassword' WHERE id = '$userId'";
    mysqli_query($conn, $query);
} ?>
</body>
</html>