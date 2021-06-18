<?php
include "inc/header.php";
if (!isset($_SESSION['users'])) {
    echo "<script>alert('Please Sign in first');window.location.href='signin.php';</script>";
}
include "controller/controller.php";

?>
<div class="container">
    <form action="" method="POST" class="row py-5">
        <!-- displaying fetched data about the company -->
        <?php while ($row = mysqli_fetch_array($query_run)) {?>
        <img src="inc/img/<?php echo $row['companyID']; ?>.png" class="col-4 img-fluid mx-auto" alt="<?php echo $row['companyName']; ?>">
        <div class="col-7 mx-auto text-end">
            <h1 class="m-0"><?php echo $row['companyName']; ?></h1>
            <h5 class="m-0"><?php echo $row['companyMoto']; ?> </h5>
            <h5 class="mb-3 lead"><i class="fas fa-map-marker-alt"></i>
            <?php echo $row['companyAddress']; ?> </h5>
            <h4 class="mt-3">About</h4>
            <p class="text-justify mb-2">
                <?php echo $row['companyDescription']; ?>
            </p>
            <div class="d-flex my-3 bg-dangers text-start">
                <div class="col-sm-6 my-1">
                    <h4>Social Media</h4>
                    <a href="<?php echo $row['socialFB']; ?>" class="mx-2" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="<?php echo $row['socialFB']; ?>" class="mx-2" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
                <div class="col-sm-6 my-2 text-end">
                    <a href="<?php echo $row['companyWebsite']; ?>" target="_blank" class="btn btn-2">Visit Website ></a>
                </div>
            </div>
        </div>
        <?php }?>
    </form>
</div>
<?php
include "inc/footer.php";
?>
