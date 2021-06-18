
<!-- back to top button -->
<div class="pb-4 px-4 text-end m-0">
<a class="text-1" href="#top"><i class="fas fa-arrow-circle-up fa-3x"></i></a>
</div>

<!-- footer -->
<footer>
  <div class="text-center pt-2 bg-2">
    <div class="row p-3">
      <div class="col-md-5 ps-5 text-start">
        <h1>TRIP DISSECT</h1>
        <h5>MAKING EARTH A BETTER PLACE</h5>
        No. 1 Jalan Taylor's 47500 Subang Jaya, Selangor Darul Ehsan, Malaysia
      </div>
      <div class="col-md-3 ps-5 text-start">
        <h3>Team</h3>
        <hr>
        Hamza <br>
        Alister Animesh Baroi <br>
        Abdullah Abdourahman Ali
      </div>
      <div class="col-md-3 ps-5 text-start">
        <h3>Contact</h3>
        <hr>
        hamza@sd.taylors.edu.my <br>
        alisteranimesh.baroi@sd.taylors.edu.my <br>
        abdallahabdourahmanali@sd.taylors.edu.my
      </div>
    </div>
    <hr class="m-0">
      <p class="m-0 py-1">
      &copy; 2021 <a class="text-dark" href="index.php">Trip Dissect</a>
      </p>
  </div>
</footer>

<?php

$data1 = 72;
$data2 = 18;
?>

<script>
jQuery(document).ready(function(){var chartDiv=$("#barChart");var myChart=new Chart(chartDiv,{type:'doughnut',data:{labels:["Electricity","Green Energy"],datasets:[{data:[<?php echo $data1; ?>,<?php echo $data2; ?>],backgroundColor:["#0076CC","#6DDE16","#FFCE56","#E7E9ED","#36A2EB"]}]},options:{title:{display:true,text:'This Month Energy Breakdown'},responsive:true,maintainAspectRatio:false}})});

var speedCanvas=document.getElementById("speedChart");Chart.defaults.global;Chart.defaults.global.defaultFontSize=18;Chart.defaults.global.defaultFontColor = '#FFF';var speedData={labels:["March","May","Current"],datasets:[{label:"Electricity Bill",data:[157,178,113],lineTension:0,fill:false,borderColor:'orange',backgroundColor:'transparent',pointBorderColor:'orange',pointBackgroundColor:'rgba(255,150,0,0.5)',borderDash:[5,5],pointRadius:5,pointHoverRadius:10,pointHitRadius:30,pointBorderWidth:2,pointStyle:'rectRounded'}]};var chartOptions={legend:{display:true,position:'top',labels:{boxWidth:80,fontColor:'#FFF'}},scales:{xAxes:[{gridLines:{display:false,color:"#FFF"},scaleLabel:{display:true,labelString:"Months",fontColor:"#FFF"}}],yAxes:[{gridLines:{color:"black",borderDash:[2,5]},scaleLabel:{display:true,labelString:"Price (RM)",fontColor:"#FFF"}}]}};var lineChart=new Chart(speedCanvas,{type:'line',data:speedData,options:chartOptions});

</script>


<!-- link of dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/113654cb35.js" crossorigin="anonymous"></script>

</body>
</html>
