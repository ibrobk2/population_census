<?php
// Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cens";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    ?>