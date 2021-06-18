<?php

// Getting user session data
$uname = $_SESSION['users'];
$query = "SELECT * FROM users WHERE user_name = '$uname'";
$query_run = mysqli_query($conn, $query);
$query_id = "SELECT id FROM users WHERE user_name = '$uname'";
$query_run_id = mysqli_query($conn, $query_id);
$query_goal = "SELECT targetUserName FROM energygoal WHERE targetUserName = '$uname'";
$query_run_goal = mysqli_query($conn, $query_goal);

// delete account, profile.php
if (isset($_POST['del'])) {
    $del = $conn->query("DELETE FROM users WHERE user_name ='$uname'");
    session_unset();
    echo "<script>alert('Account deleted successfully, now you will be redirected to the home page');window.location.href='index.php';</script>";
}

// Setting goal, dashboard.php
if (isset($_POST['setGoal'])) {
    $goalCost = $_POST['gCost'];
    $goalInterval = $_POST['gInterval'];
    $goalUsage = $_POST['gUsage'];
    if (empty($goalCost) || empty($goalInterval) || empty($goalUsage)) {
        echo "<script> alert('Please enter all informations')</script>";
    } else {
        $setGoal = $conn->query("INSERT INTO energygoal(targetUserName,targetCost,targetInterval,targetUsage) VALUES ('$uname','$goalCost','$goalInterval','$goalUsage')");
        if ($setGoal) {
            echo "<script>alert('Goal set successfully');window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Due to an unexpected error we are unable to set your goal')</script>";
        }
    }
}

//update password, profile.php
if (isset($_POST['changepass'])) {
    $npass = hash('sha256', $_POST['npass']);
    $ncpass = hash('sha256', $_POST['ncpass']);

    if (strlen($npass) <= 4 && !empty($npass)) {
        echo "<script>alert('New password must be more than 3 characters')</script>";
    } elseif ($npass != $ncpass) {
        echo "<script>alert('Confirm password did not match')</script>";
    } else {
        $update_pass = $conn->query("UPDATE users SET pass='$npass' WHERE user_name = '$uname'");
        if (!$update_pass) {
            echo "<script>alert('Due to an unroomsected error we are unable to update your password')</script>";
        } else {
            echo "<script>alert('Password updated successfully');window.location.href='profile.php';</script>";
        }
    }
}
// add/update user info, profile.php
if (isset($_POST['update'])) {
    $nfname = $_POST['nfname'];
    $nphno = $_POST['nphno'];
    $nemail = $_POST['nemail'];
    $address = $_POST['address'];
    $energyProvider = $_POST['eProvider'];
    $apartmentArea = $_POST['aArea'];
    $people = $_POST['people'];
    $rooms = $_POST['room'];
    $meterID = $_POST['mID'];
    $check = $conn->query("SELECT * FROM users WHERE user_name = '$uname' OR email = '$nemail'");
    if (empty($nfname) || empty($nphno) || empty($nemail)) {
        echo "<script> alert('Please provided all informations!')</script>";
    } else {
        $insert = $conn->query("UPDATE users SET full_name='$nfname',phone='$nphno',email='$nemail',address='$address',energyProvider='$energyProvider',apartmentArea='$apartmentArea',people='$people',rooms='$rooms', meterID='$meterID'");
        if (!$insert) {
            echo "<script>alert('Due to an unroomsected error we are unable to update your profile')</script>";
        } else {
            echo "<script>alert('Profile details updated successfully');window.location.href='profile.php';</script>";
        }
    }
}
// fetching company data from dabatase, compoany.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['clickCompany'])) {
        $companyID = $_POST['company'];
        $check = "SELECT * FROM company WHERE companyID = '$companyID'";
        $query_run = mysqli_query($conn, $check);
    }
}
