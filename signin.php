<?php
include "inc/header.php";
if (isset($_SESSION['users'])) {
    header("location: profile.php");
}
// username & password verification for login
if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pass = hash('sha256', $_POST['pass']);
    if (empty($uname) || empty($pass)) {
        echo "<script> alert('Please provided all informations')</script>";
    } else {
        $login = $conn->query("SELECT * FROM users WHERE user_name = '$uname' AND pass = '$pass'");
        if ($login->num_rows == 0) {
            echo "<script> alert('Username or password did not match!')</script>";
        } else {
            $_SESSION['users'] = $uname;
            header("location: profile.php");
        }
    }
}
?>
<form action="" method="POST">
    <!-- signin form -->
    <div class="card mx-auto my-5 text-center" style="width: 20rem;">
        <div class="card-body bg-3 pt-5">
            <i class="fas fa-user fa-6x mx-auto my-2"></i>
            <h3 class="card-title my-3">Sign In</h3>
            <div class="input-group my-4">
                <span class="input-group-text"><i class="fas fa-user text-secondary"></i></span>
                <input type="text" class="form-control" placeholder="Username" name="uname">
            </div>
            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-edit text-secondary"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="pass">
            </div>
            <input type="submit" class="form-control btn bg-1 mb-4" value="Sign In" name="submit">
        </div>
    </div>
</form>

<?php
include "inc/footer.php";
?>
