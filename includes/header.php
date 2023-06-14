<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    .header {
      display: flex;
      align-items: center;
      background-color: #f8f9fa;
      padding: 10px;
    }

    .logo {
      width: 100px;
      height: auto;
      margin-right: 10px;
    }

    .title {
      flex-grow: 1;
      text-align: center;
      font-size: 24px;
    }
  </style>
</head>

<body>
  <div class="header">
    <a href="dashboard.php"><img src="./images/hukpoly_logo.webp" alt="Logo" class="logo"></a>
    <h1 class="title">Population Census Management System</h1>
  </div>

  <?php  include "includes/footer.php"; ?>
</body>

</html>
