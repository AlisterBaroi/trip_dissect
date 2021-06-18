<?php
include "inc/header.php";
if (isset($_SESSION['users'])) {
    include "controller/controller.php";
}
?>

<section class="p-0">
<!-- Hero Desktop -->
  <div  class="container-fluid p-0 m-0" id="hero">
      <div class="hero-img"> </div>
      <div id="call-to-action" class="col-5 carousel-caption bg-4 text-start p-4">
        <h5>WELCOME TO</h5>
        <h1>TRIP DISSECT</h1>
        <p>TRACK, MONITOR AND REDUCE YOUR POWER CONSUMPTION</p>
        <a class="fw-bold btn btn-secondary signup-button" href="signup.php">Sign Up With Email </a>
      </div>
  </div>
<!-- Hero Mobile -->
  <div class="col-12 text-white m-0 p-5 bg-4" id="call-to-action-2">
    <h5>WELCOME TO</h5>
    <h1>TRIP DISSECT</h1>
    <p>MONITOR YOUR ENERGY USAGE AND HELP EARTH BE A BETTER PLACE!</p>
    <a class="fw-bold btn btn-secondary signup-button" href="signup.php">Sign Up With Email </a>
  </div>
</section>

<section class="container features">
  <div class="row bg-2 text-center">
    <div class="col-lg-3 p-4">
      <h1 class="display-3 fw-bold">CO<sub>2</sub></h1>
      <p class="mt-3">
      To reduce the global carbon dioxide emission as much as possible, especially from the production and wastage of electricity.</p>
    </div>
    <div class="col-lg-3 p-4">
      <i class="fas fa-recycle fa-5x"></i>
      <p class="mt-3">
      Increasing energy efficiency by encouraging people to monitor their power usage and not waste unnecessary power which could be recycled.
      </p>
    </div>
    <div class="col-lg-3 p-4">
      <i class="fas fa-sun fa-5x"></i>
      <p class="mt-3">
      Promoting renewable energy sources and making it convenient for people to source equipments in order to harness the sustainable energy.
      </p>
    </div>
    <div class="col-lg-3 p-4">
      <i class="fas fa-home fa-5x"></i>
      <p class="mt-3">
        Facillitating the communication between green energy solution providers and customers for sustainable house hold energy consumption.
      </p>
    </div>
  </div>
</section>


  </div>.
</div>
<?php
include "inc/footer.php";
?>
