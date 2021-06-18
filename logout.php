<?php
include "inc/header.php";
// check if user logged in
if (!isset($_SESSION['users'])) {
    echo "<script>alert('Logged Out Now');window.location.href='index.php';</script>";
} else {
    $uname = $_SESSION['users'];
    include "controller/controller.php";
}
// logout user by ending session
session_unset();
echo "<script>alert('Logged out');window.location.href='index.php';</script>";
