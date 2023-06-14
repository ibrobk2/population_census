<!DOCTYPE html>
<html>
<head>
  <title>Census Management System - Enumerator Registration</title>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      width: 100%;
      display:flex;
      flex-direction:column;
    }

.container {
  width:100%;
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  margin-top: 50px;

}

.container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.container input[type="text"],
.container input[type="email"],
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
    <h2>Enumerator Registration</h2>
    <form action="register_enumerator.php" method="POST">
      <input type="text" name="full_name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirm_password" placeholder="Confirm Password" required>
      <input type="submit" value="Register">
    </form>
    <p style='text-align:center;'>Already Have an Account? Login <a href='index.php'>Here</a></p>
  </div>
</body>
</html>