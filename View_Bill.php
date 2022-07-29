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


<form class="container" method="post">
<?php
include "connection.php";
$query = "SELECT * FROM `tea_bill`  GROUP BY remarks ORDER BY TeaBill_ID  DESC ";
$result = mysqli_query($conn, $query);
$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[8]</option>";
}

?>

<div class="input-group mb-3">
<select class="form-select" id="remark" placeholder="Enter remarks" name="remark">
<option><?php echo $options;?></option></select>
  <button class="btn btn-success" type="submit" name="search1">Search</button>
  <input type="button" class="btn btn-danger text-light" onclick="generate()" value="Export To PDF" />
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
</div>
</form>


<br>
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
<th>Remarks</th>
 </tr>
 </thead>
<tbody>
<?php
require "connection.php";
if(ISSET($_POST['search1'])){

    $remark=$_POST['remark'];
include "connection.php";

$query=mysqli_query($conn, "select *, SUM(OT) as Over_Time, SUM(Basic_Wage) as Wage, SUM(Total_KG) as KG, SUM(Total_Amount) as Amount from tea_bill Where remarks= '$remark' Group By Name") or 
die(mysqli_error());
$row=mysqli_num_rows($query);
if($row>0){
while($fetch=mysqli_fetch_array($query)){
?>
<tr>
   
<td> <?php echo $fetch['date']?></td>
  <td> <?php echo $fetch['Name']?></td>
  <td> <?php echo $fetch['KG']?></td>
  <td> <?php echo $fetch['Wage']?></td>
  <td> <?php echo $fetch['Over_Time']?></td>
  <td> <?php echo $fetch['Amount']?></td> 
  <td> <?php echo $fetch['remarks']?></td> 
  
        
</tr>
<?php

}
    }else{
    echo'
    <tr>
    <td colspan = "4"><center>Record Not Found</center></td>
    </tr>';
        }
    }
    
   
    else{
        $query=mysqli_query($conn, "SELECT * FROM `tea_bill` ORDER BY TeaBill_ID DESC") 
or die(mysqli_error());
        while($fetch=mysqli_fetch_array($result)){
            
?>
    <tr>


  <td> <?php echo $fetch['date']?></td>
  <td> <?php echo $fetch['Name']?></td>
  <td> <?php echo $fetch['Total_KG']?></td>
  <td> <?php echo $fetch['Basic_Wage']?></td>
  <td> <?php echo $fetch['OT']?></td>
  <td> <?php echo $fetch['Amount']?></td> 
  <td> <?php echo $fetch['remarks']?></td> 

    </tr>

    

<?php


        }
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


        $("#example").DataTable({

            
            
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

  <script>


function generate() {
    var doc = new jsPDF('p', 'pt', 'letter');
    var htmlstring = '';
    var tempVarToCheckPageHeight = 0;
    var pageHeight = 0;
    pageHeight = doc.internal.pageSize.height;
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"  
            return true
        }
    };
    margins = {
        top: 150,
        bottom: 60,
        left: 20,
        right: 20,
        width: 600
    };
    var y = 20;
    doc.setLineWidth(2);
    doc.text(250, y = y + 30, "Employees Bill Records");
    doc.autoTable({
        html: '#example',
        startY: 70,
        theme: 'grid',
        columnStyles: {
            0: {
                cellWidth: 100,
            },
            1: {
                cellWidth: 150,
            },
            2: {
                cellWidth: 70,
            },
            3: {
                cellWidth: 80,
            }
            ,
            4: {
                cellWidth: 50,
            }
            ,
            5: {
                cellWidth: 120,
            }
            ,
            6: {
                cellWidth: 120,
            }
            
        },
        styles: {
            minCellHeight: 20
        }
    })
    doc.save('Tea_Bill.pdf');
}

</script>
          

          </div>


</body>

</html>



