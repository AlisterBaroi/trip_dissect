<?php
include "inc/header.php";
if (isset($_SESSION['users'])) {
    include "controller/controller.php";
}
?>
<div class="container-fluid p-0">
    <h1 class="text-center text-3 my-4">Green Solutions</h1>
    <div class="px-5 mb-5">
        <div class="row text-dark">

        <!-- Company 1 -->
            <form action="company.php" method="POST" class="card mb-3 bg-5 col-sm-12 p-0">
                <div class="row g-0 text-light">
                    <div class="col-md-6">
                        <img src="inc/img/1.png" class="img-fluid company-img" alt="Company 1">
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="card-body">
                            <h2 class="card-title">Plus Solar Systems Sdn Bhd</h2>
                            <h5 class="card-subtitle my-1">The Next Energy Revolution</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt text-dark"></i>
                                Bukit Jalil, Kuala Lumpur, Malaysia
                            </p>
                            <p class="card-text px-2 py-0 mt-0 text-justify">
                            We are made up of a bunch of creative, innovative and dedicated individuals who are passionate to drive the impact of clean energy to the community...
                            </p>
                                <input type="hidden" name="company" value="1">
                                <input type="submit" class="col-sm-3 btn btn-1 float-end mb-2" name="clickCompany" value="More Info >>">
                        </div>
                    </div>
                </div>
            </form>

        <!-- Company 2 -->
            <form action="company.php" method="POST" class="card mb-3 col-sm-12 p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="inc/img/2.png" class="img-fluid company-img" alt="Company 2">
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="card-body">
                            <h2 class="card-title">ERS Energy Sdn. Bhd</h2>
                            <h5 class="card-subtitle my-1">All Natural. All-day Long. All Yours.</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                Jalan Telawi, Bangsar, KL, Malaysia
                            </p>
                            <p class="card-text px-2 py-0 mt-0 text-justify">
                            ERS Energy strives to offer world-class energy solutions accessible to everyone. Providing individuals, businesses and investors value with our...
                            </p>
                            <input type="hidden" name="company" value="2">
                            <input type="submit" class="col-sm-3 btn btn-1 float-end mb-2" name="clickCompany" value="More Info >>">
                        </div>
                    </div>
                </div>
            </form>

        <!-- Company 3 -->
            <form action="company.php" method="POST" class="card mb-3 bg-5 col-sm-12 p-0">
                <div class="row g-0 text-light">
                    <div class="col-md-6">
                        <img src="inc/img/3.png" class="img-fluid company-img" alt="Company 3">
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="card-body">
                            <h2 class="card-title">SOLS Energy Sdn Bhd</h2>
                            <h5 class="card-subtitle my-1">One Stop Sustainable Energy Platform</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                Taman Sri Sinar, Wilayah Persekutuan, KL, Malaysia
                            </p>
                            <p class="card-text px-2 py-0 mt-0 text-justify">
                            We are a green energy company that customers love. We are a social enterprise which lives responsibility to the core. Responsibility for our...
                            </p>
                            <input type="hidden" name="company" value="3">
                            <input type="submit" class="col-sm-3 btn btn-1 float-end mb-2" name="clickCompany" value="More Info >>">
                        </div>
                    </div>
                </div>
            </form>

        <!-- Company 4 -->
            <form action="company.php" method="POST" class="card mb-3 col-sm-12 p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="inc/img/4.png" class="img-fluid company-img" alt="Company 4">
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="card-body">
                            <h2 class="card-title">Ditrolic Solar</h2>
                            <h5 class="card-subtitle my-1">Towards Energy Independence</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                Ara Damansara, Petaling Jaya, Selangor, Malaysia
                            </p>
                            <p class="card-text px-2 py-0 mt-0 text-justify">
                            Founded in 2009, we’ve been around since the early days of the solar industry in Asia and have been a part of the industry evolution that have...
                            </p>
                            <input type="hidden" name="company" value="4">
                            <input type="submit" class="col-sm-3 btn btn-1 float-end mb-2" name="clickCompany" value="More Info >>">
                        </div>
                    </div>
                </div>
            </form>

        <!-- Company 5 -->
            <form action="company.php" method="POST" class="card mb-3 bg-5 col-sm-12 p-0">
                <div class="row g-0  text-light">
                    <div class="col-md-6">
                        <img src="inc/img/5.png" class="img-fluid company-img" alt="Company 5">
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="card-body">
                            <h2 class="card-title">Ray Go Solar EPC Sdn Bhd</h2>
                            <h5 class="card-subtitle my-1">The Most Advanced Technology</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                Jalan Jasmin 3, Bandar Botanik, Klang, Selangor, Malaysia
                            </p>
                            <p class="card-text px-2 py-0 mt-0 text-justify">
                            Ray Go Solar aims to build a sustainable world by making all productions greener. Productions, such as those from the usage of electricity in_array...
                            </p>
                            <input type="hidden" name="company" value="5">
                            <input type="submit" class="col-sm-3 btn btn-1 float-end mb-2" name="clickCompany" value="More Info >>">
                        </div>
                    </div>
                </div>
            </form>

        <!-- Company 6 -->
            <form action="company.php" method="POST" class="card mb-3 col-sm-12 p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="inc/img/6.png" class="img-fluid company-img" alt="Company 6">
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="card-body">
                            <h2 class="card-title">NEFINCO Sdn. Bhd.</h2>
                            <h5 class="card-subtitle my-1">Shaping Asia Pacific’s Renewable Energy</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                Jalan Tun Dr Awang, Bayan Lepas, Penang, Malaysia
                            </p>
                            <p class="card-text px-2 py-0 mt-0 text-justify">
                            NEFIN is a renewable energy investor, developer, and asset manager. We provide turnkey solutions to bring clients closer to carbon neutrality. With...
                            </p>
                            <input type="hidden" name="company" value="6">
                            <input type="submit" class="col-sm-3 btn btn-1 float-end mb-2" name="clickCompany" value="More Info >>">
                        </div>
                    </div>
                </div>
            </form>

        <!-- Company 7 -->
            <form action="company.php" method="POST" class="card mb-3 bg-5 col-sm-12 p-0">
                <div class="row g-0  text-light">
                    <div class="col-md-6">
                        <img src="inc/img/7.png" class="img-fluid company-img" alt="Company 7">
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="card-body">
                            <h2 class="card-title">Symbior Cahaya Sdn Bhd</h2>
                            <h5 class="card-subtitle my-1">Power Your Business With The Sun</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                Empire Subang SOHO, Subang Jaya, Selangor, Malaysia
                            </p>
                            <p class="card-text px-2 py-0 mt-0 text-justify">
                            Symbior Solar implements, operates, and maintains solar panel installations to the highest international standards, ensuring smooth operations and...
                            </p>
                            <input type="hidden" name="company" value="7">
                            <input type="submit" class="col-sm-3 btn btn-1 float-end mb-2" name="clickCompany" value="More Info >>">
                        </div>
                    </div>
                </div>
            </form>

        <!-- Company 8 -->
            <form action="company.php" method="POST" class="card mb-3 col-sm-12 p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="inc/img/8.png" class="img-fluid company-img" alt="Company 8">
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="card-body">
                            <h2 class="card-title">Solarvest Energy Sdn Bhd</h2>
                            <h5 class="card-subtitle my-1">Turning Sunlight Into Investment</h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i>
                                Ara Damansara, Petaling Jaya, Selangor, Malaysia
                            </p>
                            <p class="card-text px-2 py-0 mt-0 text-justify">
                            Solarvest was founded in 2012 with the vision to create a world where clean energy is easily accessible to many. We are among the first batch of...
                            </p>
                            <input type="hidden" name="company" value="8">
                            <input type="submit" class="col-sm-3 btn btn-1 float-end mb-2" name="clickCompany" value="More Info >>">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "inc/footer.php";
?>