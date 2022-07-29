<?php
session_start();
include "connection.php";
if(!isset($_SESSION['username'])){
  header("Location: Login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Naindra Raj Phago</title>
<link rel="icon" href="images/logo.jpg">
<link rel="stylesheet" href="CSS/home.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="https://kit.fontawesome.com/ced4141919.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.
0/Chart.min.js"></script>

</head>
<body>

      <?php include "Admin-Side-Nav.php" ?>
    
</br>
  <div class="w3-container">
<div class="w3-cell-row">

<div class="w3-container bg-primary p-5 text-light card w3-cell w3-mobile mb-2" >
<h2>Total Earned</h2>
<?php
    include "connection.php";
    $query = "SELECT sum(Tea_Total) as total from tea_record";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "$row[0]";
      }
      ?> Rupees
      </div> 

<div class="w3-container w3-red p-5 text-light card w3-cell w3-mobile mb-2" >
<h2>Exmployees Expenses</h2>
<?php 
    include "connection.php";
    $query = "SELECT SUM(Total_Amount) FROM tea_bill";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "$row[0]";
      }
      ?> Rupees
</div>

<div class="w3-container bg-success p-5 card   text-light w3-cell w3-mobile mb-2" >
  <h2>Chemical Expenses</h2>
  <?php 
    include "connection.php";
    $query = "SELECT SUM(Total) FROM chemical";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "$row[0]";
      }
      ?> Rupees
</div>


<div class="w3-container bg-warning p-5 text-light card w3-cell w3-mobile mb-2" >
  <h2>Fertilizer Expenses</h2>
  <?php 
    include "connection.php";
    $query = "SELECT SUM(Total) FROM fertilizer";
     $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
     while ($row = mysqli_fetch_array($result)) {
      echo "$row[0]";
      }
      ?> Rupees
</div>




</div>
</div>


<!-- Chart Section -->

<?php  
include "connection.php";  
 $query = "SELECT Tea_Date, Tea_Total FROM tea_record ORDER BY tea_id DESC";  
 $result = mysqli_query($conn, $query);  
 ?>  

<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Tea Record Analysis</h2>
</div>
<br>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tea Date', 'Amount'],  
<?php  
while($row = mysqli_fetch_array($result))  
 {  
  echo "['".$row["Tea_Date"]."', ".$row["Tea_Total"]."],";  
   }  
 ?> 
        ]);

        var options = {
          title: 'Tea Record Growth Analysis',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
 
 
    <div class="w3-container" id="curve_chart" style="width: 100%; height: 50vh;"></div>


<!-- 
Row Close -->
    </div>

</div>

<br>

























<div class="w3-container mt-2">
 <div class="w3-cell-row">


       <!----Pie Chart--->

   <div class="w3-container w3-cell w3-mobile">
       <?php
        include "connection.php";
         $sql ="SELECT * FROM tea_record ORDER BY Tea_ID DESC LIMIT 7";
         $result = mysqli_query($conn,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['Tea_Date']  ;
            $sales[] = $row['Tea_Total'];
        }
 
 
 
     ?>
     
  
      <div class="bar" style="max-width: 700px;">
        <h2 class="page-header" >Analytics Reports </h2>
          <div>Tea Records</div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    

           <script type="text/javascript">  
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e",
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
  
              </div>
              


 <!-- RECENT PRODUCTS -->
 <div class="w3-container w3-cell w3-mobile">
      <div class="card shadow h-100">
            <div class="card-body">
                <div class="row no-gutters align-items-center ">

             <!-- <div class="col"> -->
              <i class="fa fa-th-list fa-fw"></i> 
           </div>

            <div class="panel-heading"> Recent Messages
             </div>
                        <div class="row no-gutters align-items-center mt-1">
                        <div class="col">
                          <div class="h6 mb-0 mr-0 text-gray-800">
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                            <div class="list-group">
                              <?php 
                              include "connection.php";
                                $query = "SELECT Message, Name, Logs FROM messages order by ID DESC LIMIT 10";
                                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_array($result)) {

                                    echo "<a href='#' class='list-group-item text-gray-800 p-2'>
                                          <i class='fa fa-tasks fa-fw'></i> $row[1], $row[0]
                                          </a>";
                                  }
                              ?>
                            </div>
                            <!-- /.list-group -->
                            <a href="message.php" class="btn btn-default btn-block">View All Messages</a>
                        </div>
                        <!-- /.panel-body -->
                    </div></div></div>
                  
                  </div></div></div>


                 

</div></div>                  

<?php
include "admin-footer.php";
?>
 

 

</body>


</html>


