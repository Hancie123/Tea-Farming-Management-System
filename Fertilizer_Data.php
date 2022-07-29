<?php
session_start();
include "connection.php";
if(!isset($_SESSION['username'])){
  header("Location: Login.php");
}
?>

<?php  
include "connection.php";
 $connect = mysqli_connect("localhost", "root", "", "tea");  
 $query = "SELECT * FROM fertilizer";  
 $result = mysqli_query($conn, $query);  
 ?>  
<html>
  <head>
  <title>Naindra Raj Phago</title>
<link rel="icon" href="images/logo.jpg">
<meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php include "Admin-Side-Nav.php" ?>

    <br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Fertilizer Expenses Analysis</h2>
</div>
<br>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Date', 'Rate','Total'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["Date"]."', ".$row["Rate"].", ".$row["Total"]."],";  
                          }  
                          ?>  
        ]);

        var options = {
          chart: {
            title: 'Fertilizer Expenses',
            subtitle: 'Naindra Tea Farming',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
 
    <div id="columnchart_material" style="width: 100%; height: 50vh;"></div>


<!-- 
Row Close -->
    </div>

</div>

<br>

  </body>


<?php
include "admin-footer.php";
?>

</html>



