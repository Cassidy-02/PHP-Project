<?php
include 'homepage.php';
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Registration Form</title>
  </head>

  <style>
  body{
    text-align: center;
    background-color: grey;
  }

  </style>

  <body>
    <h1>Registration Form</h1>
    <form method="POST" action="Login.php">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      
      <input type="submit" value="Register"> 
    </form>

    <h2>After registering you will be directed to the login page</h2>    
  </body>
</html>