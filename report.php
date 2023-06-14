<!DOCTYPE html>
<html>
<head>
    <title>Census Data Report</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include "includes/header.php";
    include "includes/server.php"; ?>
    <h1 style="text-align:center;">Census Data Report</h1>
    <h2><?php 
         // Fetch the total population from the census data
    $sql = "SELECT SUM(population) AS total_population FROM census_data";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalPopulation = $row["total_population"];
        echo "Total Population: " . $totalPopulation;
    } else {
        echo "No data available.";
    }

    $conn->close();
    ?></h2>
    <button class="btn btn-primary" onclick="print();">Print</button>
    <br><br>

    <?php
  include "includes/server.php";

    // Fetch all census data
    $sql = "SELECT house_number, population FROM census_data";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>House Number</th><th>Population</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["house_number"] . "</td><td>" . $row["population"] . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No data available.";
    }

    $conn->close();
    ?>
</body>
</html>
