<!DOCTYPE html>
<html>
<head>
    <title>Population Census Management System - Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .dashboard-heading {
            margin-bottom: 30px;
        }

        .dashboard-card {
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            background-color: #f7f7f7;
        }

        .dashboard-card h2 {
            margin-bottom: 20px;
        }

        .dashboard-card p {
            margin-bottom: 30px;
        }

        .dashboard-card a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .dashboard-card a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="dashboard-heading">Population Census Management System - Admin Dashboard</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="dashboard-card">
                    <h2>View Report</h2>
                    <p>View the population census report.</p>
                    <a href="report.php" class="btn btn-primary">View Report</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dashboard-card">
                    <h2>Manage Enumerators</h2>
                    <p>Manage the list of enumerators.</p>
                    <a href="manage_enumerators.php" class="btn btn-primary">Manage Enumerators</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dashboard-card">
                    <h2>Logout</h2>
                    <p>Logout from the admin panel.</p>
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dashboard-card">
                    <h2>Population Count</h2>
                    <p>Perform population count operations.</p>
                    <a href="census.php" class="btn btn-primary">Population Count</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
