<?php
//MARWA SGHAIER
include("connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
   
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bennes</title>
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
    <h1 style="text-align:center">List of Dumpsters
 </h1>
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM bin ";
            $result = mysqli_query($idcon, $query);
            echo '<table class="styled-table">  <thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col">Location</th>
      <th scope="col">Storage</th>
    </tr>
  </thead>';

            while ($row = mysqli_fetch_array($result)) {
                //getting id from bin
                $tmp_id = $row['id'];
                $query = "SELECT id FROM bin WHERE '$tmp_id' = id";
                $tmp_result = mysqli_query($idcon, $query);
                $tmp_row = mysqli_fetch_array($tmp_result);
                $tmp_location = $tmp_row['id'];
                //getting location from bin
                $tmp_id = $row['id'];
                $query = "SELECT location FROM bin WHERE '$tmp_id' = id";
                $tmp_result = mysqli_query($idcon, $query);
                $tmp_row = mysqli_fetch_array($tmp_result);
                $tmp_location = $tmp_row['location'];
                //getting storage from bin
                $tmp_id = $row['id'];
                $query = "SELECT storage FROM bin WHERE '$tmp_id' = id";
                $tmp_result = mysqli_query($idcon, $query);
                $tmp_row = mysqli_fetch_array($tmp_result);
                $tmp_storage = $tmp_row['storage'];

                //show
                echo "<tr><td>" . htmlspecialchars($row['id']) . "</td><td>" . htmlspecialchars($tmp_location) . "</td><td>" . htmlspecialchars($tmp_storage) . "</td></tr>";
            }

            echo "</table>";
            ?></div> </br><br /><br>
        <h1 style="text-align:left">Tonnage </h1>
        <div class="container">
            <div class="row">
                <?php
                $query = "SELECT sum(storage) as tonnage FROM bin";
                $result = mysqli_query($idcon, $query);
                $tmp_result = mysqli_query($idcon, $query);
                $tmp_row = mysqli_fetch_array($tmp_result);
                $tmp_tonnage = $tmp_row['tonnage'];
                echo " $tmp_tonnage ";
                ?>
                </br><br /><br>
                <nav id="navbar" class="navbar center"><a class="getstarted scrollto" href="../functions/chauffeurpage.php">Back</a></nav>
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