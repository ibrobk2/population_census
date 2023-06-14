<!DOCTYPE html>
<html>
<head>
    <title>Manage Enumerators</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    padding: 20px;
}

h1 {
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

@media screen and (max-width: 600px) {
    table {
        font-size: 12px;
    }

    th, td {
        padding: 5px;
    }
}

    </style>
</head>
<body>
    <a href="dashboard.php">Back to Dashboard</a>
    <h1>Manage Enumerators</h1>

    <?php
    // Database connection settings
    include "includes/server.php";

    // Retrieve the list of enumerators from the database
    $sql = "SELECT * FROM users WHERE role='enumerator'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display the list of enumerators
        echo "<table>
                <tr>
                    <th>Enumerator ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Option</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["full_name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["username"] . "</td>
                    <td><a href='del_enum.php?del=".$row["id"]."'>Delete</a></td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No enumerators found.";
    }

    $conn->close();
    ?>
</body>
</html>
