<?php
// starting batabase connection and session
$db_host = "localhost";
$db_user = "root";
// password from phpmyadmin
$db_pass = "";
$db_name = "TripDissectDB";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("unable to connect");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Dissect</title>
    <!-- dependencies -->
    <link href="inc/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body>
<!-- website navigation menu start -->
<nav class="navbar navbar-expand-lg navbar-light bg-2" id="top">
  <div class="container-fluid text-6">
    <a class="navbar-brand ms-3" href="index.php">Trip Dissect</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto me-3 my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item mx-1">
        <?php if (!isset($_SESSION['users'])) {?>
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
          <?php } else {?>
            <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
            <?php }?>
        </li>
        <?php if (!isset($_SESSION['users'])) {?>
        <li class="nav-item mx-1">
          <a class="nav-link" href="solutions.php">Solutions</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" href="signin.php">Sign In</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
        <?php } else {?>
        <?php // if (!isset($_SESSION['users'])) {?>
        <?php //} else {?>
          <li class="nav-item mx-1">
          <a class="nav-link" href="solutions.php">Solutions</a>
        </li>
        <div class="btn-group mx-1">
            <button type="button" class="btn border dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                Account
            </button>
            <ul class="dropdown-menu dropdown-menu-end bg-2">
                <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>

            </ul>
        </div>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>
<!-- website navigation menu end -->