<?php
//ALADDIN SALHAOUI
include("connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Transactions</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body class="bgimg">
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.php">The Green Project</a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="login.php">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <br><br><br><br><br><br><br><br><br>
    <h1 style="text-align:center">Transaction logs</h1>
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM transactions";
            $result = mysqli_query($idcon, $query);
            echo '<table class="styled-table">  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">USER</th>
      <th scope="col">DRIVER</th>
      <th scope="col">WASTE</th>
    </tr>
  </thead>';

            while ($row = mysqli_fetch_array($result)) {
                //getting the username from user
                $tmp_id = $row['user_id'];
                $query = "SELECT username FROM user WHERE '$tmp_id' = immat";
                $tmp_result = mysqli_query($idcon, $query);
                $tmp_row = mysqli_fetch_array($tmp_result);
                $tmp_user = $tmp_row['username'];
                //getting the username from driver
                $tmp_id = $row['driver_id'];
                $query = "SELECT username FROM user WHERE '$tmp_id' = immat";
                $tmp_result = mysqli_query($idcon, $query);
                $tmp_row = mysqli_fetch_array($tmp_result);
                $tmp_driver = $tmp_row['username'];
                //getting title from waste
                $tmp_id = $row['waste_id'];
                $query = "SELECT title FROM waste WHERE '$tmp_id' = id";
                $tmp_result = mysqli_query($idcon, $query);
                $tmp_row = mysqli_fetch_array($tmp_result);
                $tmp_waste = $tmp_row['title'];

                //show
                echo "<tr><td>" . htmlspecialchars($row['id']) . "</td><td>" . htmlspecialchars($tmp_user) . "</td><td>" . htmlspecialchars($tmp_driver) . "</td><td>" . htmlspecialchars($tmp_waste) . "</td></tr>";
            }

            echo "</table>";
            ?>
            <nav id="navbar" class="navbar"><a class="getstarted scrollto" onclick="history.back()">Back</a></nav>
        </div>
    </div>
</body>
<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</html>