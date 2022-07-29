<?php
session_start();
include "connection.php";
if(!isset($_SESSION['username'])){
  header("Location: Login.php");
}
?>

<?php  
include "connection.php";  
 $query = "SELECT Name, SUM(Total) as Amount FROM chemical GROUP BY Name";  
 $result = mysqli_query($conn, $query);  
 ?>  
<!DOCTYPE html>
<html>
<head>
<title>Naindra Raj Phago</title>
<link rel="icon" href="images/logo.jpg">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<?php include "Admin-Side-Nav.php" ?>
</head>
<body>
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2>Chemical Expenses Analysis</h2>
</div>
<br>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Name', 'Number'],  
<?php  
while($row = mysqli_fetch_array($result))  
 {  
  echo "['".$row["Name"]."', ".$row["Amount"]."],";  
   }  
 ?> 
        ]);

        var options = {
          title: 'Total Chemical Expenses Report',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
 
 
    <div class="w3-container" id="piechart_3d" style="width: 100%; height: 50vh;"></div>


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



