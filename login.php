<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection settings
        include "includes/server.php";

        $username = $_POST["username"];
        $password = $_POST["password"];

        // Prepare and execute the SQL statement to check user credentials
        $stmt = $conn->prepare("SELECT role FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->store_result();

        // Check if a row was returned
        if ($stmt->num_rows == 1) {
            // Fetch the role from the result
            $stmt->bind_result($role);
            $stmt->fetch();

            // Redirect to the respective dashboard based on role
            if ($role === "admin") {
                // Redirect admin to dashboard.php
                header("Location: dashboard.php");
                exit;
            } elseif ($role === "enumerator") {
                // Redirect enumerator to enumerator_dashboard.php
                header("Location: enumerator_dashboard.php");
                exit;
            }
        } else {
            // Invalid credentials
            echo "Invalid username or password.";
        }

        $stmt->close();
        $conn->close();
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
