<?php
session_start();
include "connection.php";
if(!isset($_SESSION['username'])){
  header("Location: Login.php");
}
?>
<?php  
include "connection.php";
$id=$_SESSION['id'];
 $query = "SELECT SUM(Total_Amount) as Amount FROM tea_bill";  
 $result = mysqli_query($conn, $query);  
 ?> 

<!DOCTYPE html>
<html>
<head>
<title>Naindra Raj Phago</title>
<link rel="icon" href="images/logo.jpg">
<link rel="stylesheet" href="employees.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<?php include "Admin-Side-Nav.php" ?>
 
</br>

<div class="w3-card-4 pt-2">
<div class="w3-container bg-success text-light">
  <h2>Tea Bill Records</h2>
</div>
<br />
<div class="table-responsive">  
<table id="example" class="table table-bordered table-striped">
<thead class="bg-success text-light">
<tr>
                                
<th>Date</th>
<th>Name</th>
<th>Total KG</th>
<th>Basic Wage</th>
<th>OT</th>
<th>Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
include "connection.php";
$sql="SELECT * FROM tea_bill";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
 
  <td> <?php echo $row['date']?></td>
  <td> <?php echo $row['Name']?></td>
  <td> <?php echo $row['Total_KG']?></td>
  <td> <?php echo $row['Basic_Wage']?></td>
  <td> <?php echo $row['OT']?></td>
  <td> <?php echo $row['Total_Amount']?></td> 
</tr>

<?php  
}
?>              
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
</table>
</div> 


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
    <!--  Datatables JS-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>   
    <!-- SUM()  Datatables-->
    <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script>

    <script>
    $(document).ready(function(){
        var tabla = $("#example").DataTable({
               "createdRow":function(row,data,index){                   
                  
                   if(data[5] >= 1000){
                      
                    
                   }
               }, 
                "drawCallback":function(){
                       
                      var api = this.api();
                      $(api.column(5).footer()).html(
                          'Total: '+api.column(5, {page:'current'}).data().sum()
                      )
                }
                

                
        });

       
    });
    </script>
<div >
<?php
$id=$_SESSION['id'];
$sql="SELECT SUM(Total_Amount) as Amount FROM tea_bill";

$query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($query)){
?>

<input type="button" value="Total Expenditure: Rs <?php echo $row['Amount'];?> " class="btn btn-success mb-3">
<?php
}
?>


</div>


</div>

<script>
  $(document).ready(function () {
    $('#hancie').DataTable();
});

  </script>
          

          </div>


</body>

</html>



