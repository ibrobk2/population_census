<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cens";

// Field values to be inserted
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$role = "enumerator";

$confirm_password = $_POST['confirm_password'];

try {
  // Create a new PDO instance
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  // Set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Prepare the SQL statement
  $stmt = $conn->prepare("INSERT INTO users (full_name, email, username, password, role) VALUES (:full_name, :email, :username, :password, :role)");

  // Bind the parameters
  $stmt->bindParam(':full_name', $full_name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':username', $user);
  $stmt->bindParam(':password', $pass);
  $stmt->bindParam(':role', $role);

  // Execute the statement
  $stmt->execute();

  echo "<script>
    alert('Enumerator Registered successfully');
    window.location = 'index.php';
  </script>";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
