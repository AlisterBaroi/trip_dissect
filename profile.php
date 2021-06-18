<?php
include "inc/header.php";
if (!isset($_SESSION['users'])) {
    echo "<script>alert('Please Sign in first');window.location.href='signin.php';</script>";
}
include "controller/controller.php";

?>
<div class="container">
    <form class="row pt-3" action="" method="POST">
        <!-- displaying user info -->
        <?php while ($row = mysqli_fetch_array($query_run)) {?>
        <div class="col-lg-4">
            <div class="bg-3">
                <!-- profile info section start -->
                <div class="card-body">
                    <h3 class="card-title my-3">Profile Info</h3>
                    <p class="py-0 my-1">User Name</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control " placeholder="Username" value="<?php echo $row['user_name']; ?>" disabled>
                    </div>
                    <p class="py-0 my-1">Full Name</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                        <input type="text" class="form-control" placeholder="Full Name" name="nfname" value="<?php echo $row['full_name']; ?>">
                    </div>
                    <p class="py-0 my-1">Phone</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="number" class="form-control" placeholder="Phone No" name="nphno" value="<?php echo $row['phone']; ?>">
                    </div>
                    <p class="py-0 my-1">Email</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="email" class="form-control" placeholder="Email Address" name="nemail" value="<?php echo $row['email']; ?>">
                    </div>
                    <p class="py-0 my-1">Address</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $row['address']; ?>">
                    </div>
                </div>
                <!-- profile info section end -->

            </div>
        </div>
        <div class="col-lg-4">
            <div class="multi-collapse bg-3">
                <!-- payment info section start -->
                <div class="card-body">
                    <h3 class="card-title my-3">Energy Info</h3>
                    <p class="py-0 my-1">Energy Provider</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                        <input type="text" class="form-control" placeholder="Name of Energy Company" name="eProvider" value="<?php echo $row['energyProvider']; ?>">
                    </div>
                    <p class="py-0 my-1">Meter ID</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-id-badge text-secondary"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Meter ID" name="mID" value="<?php echo $row['meterID']; ?>">
                    </div>
                    <div class="input-group py-0 my-1">
                    <p class="my-1 col-6">Apsrtment Area (sqft)</p>
                    <p class="my-1">. No. of People</p>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-users text-secondary"></i></span>
                        <input type="number" class="form-control me-1" placeholder="Sqft" name="aArea" value="<?php echo $row['apartmentArea']; ?>">
                        <span class="input-group-text"><i class="fas fa-users text-secondary"></i></span>
                        <input type="number" class="form-control" placeholder="People" name="people" value="<?php echo $row['people']; ?>">
                    </div>
                    <div class="input-group py-0 my-1">
                    <p class="my-1 col-6">No. of Rooms</p>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-bed text-secondary"></i></span>
                        <input type="number" class="form-control me-1" placeholder="Rooms" name="room" value="<?php echo $row['rooms']; ?>">
                    </div>
                </div>
                <!-- payment info section end -->
            </div>
        </div>
        <div class="col-lg-4">
            <div class="multi-collapse bg-3">
                <!-- security section start -->
                <div class="card-body">
                    <h3 class="card-title my-3">Security</h3>
                    <p class="py-0 my-1">Set New Password</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-edit"></i></span>
                        <input type="password" class="form-control" placeholder="New Password" name="npass" value="">
                    </div>
                    <p class="py-0 my-1">Confirm New Passwprd</p>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-edit text-secondary"></i></span>
                        <input type="password" class="form-control" placeholder="Confirm New Password" name="ncpass" value="">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-lock text-secondary"></i></span>
                        <input type="submit" class="form-control btn btn-1" name="changepass" value="Change Password">
                    </div>
                </div>
                <!-- security section end -->
            </div>

            <!-- delete account section start -->
            <div class="col-12 mt-3">
                <div class="multi-collapse bg-4">
                    <div class="card-body">
                        <h3 class="card-title mb-2">Delete Account</h3>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-trash-alt"></i></span>
                            <input type="submit" class="form-control bg-danger text-white" value="Delete Account" name="del">
                        </div>
                    </div>
                </div>
            </div>
            <!-- delete account section end -->
        </div>
        <?php }?>
        </div>
        <div class="px-5 mt-0">
            <div class="input-group mb-5 pt-5 px-5">
                <a href="" class="form-control btn border-secondary me-1">Discard</a>
                <input type="submit" class="form-control btn btn-2" value="Save Changes" name="update">
            </div>
        </div>
    </form>
</div>
<?php
include "inc/footer.php";
?>
