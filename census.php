<!DOCTYPE html>
<html>
<head>
    <title>Census Population Count</title>
    <style>
        /* Global styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

h1 {
    color: #333;
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"] {
    padding: 8px;
    margin-bottom: 10px;
    width: 300px;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #555;
}

/* Form styles */
form {
    margin-top: 20px;
}

/* Error message styles */
.error-message {
    color: red;
    margin-top: 10px;
}

/* Success message styles */
.success-message {
    color: green;
    margin-top: 10px;
}

    </style>
</head>
<body>
    <div class="container">

    
    <?php include "includes/header.php"; ?>
    <a href="index.php"><h1>Logout</h1></a>
    <h1>House-to-House Population Count</h1>

    <?php
    // Database connection settings
    include "includes/server.php";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $houseNumber = $_POST["house_number"];
        $population = $_POST["population"];

        // Prepare and execute the SQL statement to insert the data
        $stmt = $conn->prepare("INSERT INTO census_data (house_number, population) VALUES (?, ?)");
        $stmt->bind_param("si", $houseNumber, $population);

        if ($stmt->execute()) {
            echo "Data saved successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="house_number">House Number:</label>
        <input type="text" name="house_number" required><br>

        <label for="population">Population:</label>
        <input type="number" name="population" required><br>

        <input type="submit" value="Save Data">
    </form>
    </div>
</body>
</html>
