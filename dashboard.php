<?php
include "inc/header.php";
if (!isset($_SESSION['users'])) {
    echo "<script>alert('Please Sign in first');window.location.href='signin.php';</script>";
}
include "controller/controller.php";

?>
<section action="product.php" method="POST" class="px-5 py-0 m-2 mt-0 mb-0 bg-warnings">
    <div class="row py-3 px-5 bg- rounded">
        <div class="col-12 d-flex">
            <h1 class="col-9">Power Usage</h1>
            <p class="col-3 text-end"><?php echo date("d M Y") ?></p>
        </div>
        <hr>

        <!-- total summary -->

        <div class="col-lg-6 p-4 bg-6 text-white">
            <h2>Total</h2>
            <hr>
            <div class="d-flex">
                <div class="col-lg-6 mx-0">
                    <p>This Week</p>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0">Cost</p>
                        <h3 class="col-7 me-3 my-0">RM 49</h3>
                    </div>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0">Savings</p>
                        <h5 class="col-7 me-3 my-0">RM 4</h5>
                    </div>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0">Usage</p>
                        <h5 class="col-7 me-3 my-0">96 Kwh</h5>
                    </div>
                </div>
                <div class="col-lg-6 mx-0">
                    <p>This Month</p>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0">Cost</p>
                        <h3 class="col-7 me-3 my-0">RM 113</h3>
                    </div>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0">Savings</p>
                        <h5 class="col-7 me-3 my-0">RM 23</h5>
                    </div>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0">Usage</p>
                        <h5 class="col-7 me-3 my-0">326 Kwh</h5>
                    </div>
                </div>
            </div>
            </div>

        <!-- consumption by sector -->
            <div class="col-6 bg-white p-0 m-0 d-flex">
                <!-- <canvas id="barChart" width="300" height="300"></canvas> -->
                <div class="col-lg-12 bg-2 p-4">
                    <canvas id="barChart" width="300" height="300"></canvas>
                </div>
                <!-- <div class="col-lg-5 bg-2 p-4">
                <h2 class="m-0 p-0">Carbon Footprint</h2>
                    <br>
                    <h3 class="m-0 p-0">chart here</h3>
                </div> -->
            </div>
        <!-- Tips part -->
            <div class="col-lg-6 bg-2 p-4">
                <h2 class="">Power Saving Tip</h2>
                <hr>
                <div class="d-flex">
                    <p class="col-5 text-justify pe-3"><strong>Use Natural Light</strong><br>
                    Turning off one 60-watt bulb for four hours a day is a $9 saving over a year.
                    </p>
                    <p class="col-7 text-justify ps-3"><strong>Wash Laundry in Cold</strong><br>
                    Switching from hot to cold water for an average of three loads per week, you could save up to RM 88 per year.
                    </p>
                </div>
            </div>
        <!-- set goal -->
            <form action="" method="POST" class="col-lg-6 p-4 bg-3 text-white float-end">
                <h2 class="">Set Energy Goal</h2>
                <hr>
                    <div class="input-group mb-0">
                        <p class="col-4">Target Cost</p>
                        <p class="col-4">Energy</p>
                        <p class="col-4">Green Energy</p>
                    </div>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control me-3" placeholder="RM" name="gCost" value>
                        <input type="text" class="form-control me-3" placeholder="Kwh" name="gInterval">
                        <input type="text" class="form-control me-3" placeholder="Kwh" name="gUsage">
                    </div>
                <input type="submit" class="btn btn-1 px-4" name="setGoal" value="Set Goal +">
            </form>
    </div>
</section>

<section class="px-5 py-0 m-2 mt-0 mb-5 bg-warnings">
    <div class="row py-3 px-5 bg-warnings rounded">
            <h1>Costs</h1>
            <hr>
            <!-- cost summary  -->
            <div class="col-lg-3 p-2 p-4 bg-4 text-white">
                    <h2>Bill</h2>
                    <p>Last 3 Months</p>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0">Current</p>
                        <h4 class="me-3 my-0">RM 113</h4>
                    </div>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0"><?php echo date('M', strtotime(date('Y-m') . " -1 month")); ?></p>
                        <h4 class="me-3 my-0">RM 178</h4>
                    </div>
                    <div class="input-group mb-4">
                        <p class="col-4 mb-0"><?php echo date('M', strtotime(date('Y-m') . " -2 month")); ?></p>
                        <h4 class="me-3 my-0">RM 157</h4>
                    </div>
            </div>
            <div class="col-lg-9 bg-3 p-0 d-flex">
                <div class="col-12 p-4">
                    <canvas id="speedChart" style="max-width: 50vw; width: 50vw; max-height: 50vh; height: 50vh;"></canvas>
                </div>
            </div>
    </div>
</section>
<section class="px-5 py-0 m-2 mt-0 mb-5 bg-warnings">
    <div class="row py-3 px-5 bg-warnings rounded">
            <h1>Energy Breakdown</h1>
            <hr>
            <!-- cost summary 2 months -->
            <div class="col-lg-6 p-2 p-4 bg-3 text-white">
                <h2>Generated Energy</h2>
                <p>This Month</p>
                <p class="col-4 mb-0">Emmision</p>
                <div class="progress" style="height: 10%;">
                    <div class="progress-bar bg-6 text-white" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100">36.4 Kg</div>
                </div>
                <p class="col-4 mb-0 mt-2">Generated</p>
                <div class="progress" style="height: 10%;">
                    <div class="progress-bar bg-5 text-white" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">245kWh</div>
                </div>
                <p class="col-4 mb-0 mt-2">Green Generated</p>
                <div class="progress" style="height: 10%;">
                    <div class="progress-bar bg-1 text-white" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">54kWh</div>
                </div>
            </div>
            <!-- Month to month comparison -->
            <div class="col-lg-6 bg-6 p-0 d-flex text-light">
                <div class="col-6 p-4 ms-4">
                    <h4 class="p-0">This Month</h4>
                    <h3 class="m-0 p-0">36.4 Kg</h3>
                    <p class="m-0 p-0">CO<sub>2</sub> Emission</p>
                    <br>
                    <h3 class="m-0 p-0">12 Plants</h3>
                    <p class="m-0 p-0">Saved</p>
                    <br>
                    <h3 class="m-0 p-0">204.8 Kwh</h3>
                    <p class="m-0 p-0">Total Predicted Usage</p>
                </div>
                <div class="col-6 p-4">
                    <h4 class="p-0"><?php echo date('M', strtotime(date('Y-m') . " -1 month")); ?></h4>
                    <h3 class="m-0 p-0">47.3 Kg</h3>
                    <p class="m-0 p-0">CO<sub>2</sub> Emission</p>
                    <br>
                    <h3 class="m-0 p-0">5 Plants</h3>
                    <p class="m-0 p-0">Saved</p>
                    <br>
                    <h3 class="m-0 p-0">240.2 Kwh</h3>
                    <p class="m-0 p-0">Total Predicted Usage</p>
                </div>
            </div>
    </div>
</section>
<!--

the best tips to save energy

 Turn off unnecessary lights- two 100-watt incandescent bulbs switched off an extra two hours per day could save you $15 over a year. Better yet, switch to LED.
Save $15

Unplug unused electronics - Standby power can account for 10% of an average household's annual electricity use. Unplug unused electronics and save $50 a year.
Save $50
Not home? Turn off the air conditioner- Turn off that old window unit air conditioner for five hours a day while you're away. Do that for 60 days over a summer and you'll save $16.
Save $16
Ditch the desktop computer- If you're still using that old desktop, recycle it and switch to your laptop. If you use your laptop two hours per day, you'll save $4 over a year.
Save $4
.Wash laundry in cold- By switching from hot to cold water for an average of three loads per week, you could save up to $22 per year on your energy bill.
Save $22
Be efficient with refrigeration- Unplug that second fridge and save up to $55 a year. Freeze plastic jugs of water and use them in a cooler when you need them.
Save $55
Use the microwave, crock pot or toaster oven- A microwave takes 15 minutes to do the same job as 1 hour in an oven. Use a microwave instead of your oven 4 times a week and save $13/year.
Save $13
Use task lighting- turn off ceiling lights and use table lamps, track lighting and under-counter lights in work and hobby areas as well as in kitchens.
Save $


Manage your thermostat- If you have electric heat, lower your thermostat by two degrees to save 5% on your heating bill. Lowering it five degrees could save 10%.

Wash laundry in cold- By switching from hot to cold water for an average of three loads per week, you could save up to $22 per year on your energy bill.
Save $22
 -->
<?php
include "inc/footer.php";
?>


