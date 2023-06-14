<!DOCTYPE html>
<html>
<head>
  <title>Census Management System - Login</title>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,12,1) 35%, rgba(0,212,255,1) 100%);
    }
    .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 100px;
}

.container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.container input[type="text"],
.container input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

.container input[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.container input[type="submit"]:hover {
  background-color: #45a049;
}
  </style>
</head>
<body>
<?php include "includes/header.php"; ?>
  <div class="container">
    <h2>Admin Login</h2>
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">

    </form>
    <!-- <p>Don't Have Account? Register <a href="register.php">Here</a></p> -->
  </div>
</body>
</html>



