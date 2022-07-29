<?php
session_start();
include("connection.php");
 if(!isset($_SESSION['username']))
 {
	 header("location:Login.php");
 }
?>

<!DOCTYPE html>
<html>
<head>
<title>Naindra Raj Phago</title>
<link rel="icon" href="images/logo.jpg">
<link rel="stylesheet" href="employees.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="text/javascript" src="nepali-date-picker.min.js"></script>
<link rel="stylesheet" href="nepali-date-picker.min.css">
  
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<?php include "Admin-Side-Nav.php" ?>

<?php
include "connection.php";
$query = "SELECT * FROM `employees`";
$result = mysqli_query($conn, $query);
$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[1]</option>";
}

?>
<br>
<div class="w3-card-4">

<div class="w3-container bg-success text-light">
  <h2 class="text-center">Employees Bill Management</h2>
</div>
<br>


<form action="function_employees_bill.php" method="post" >
<div class="w3-cell-row">


<div class="w3-container w3-cell w3-mobile">


<label class="form-label" for="firstname">Date:</label>
<input type="text" id="nepali-datepicker-2" name="date" class="form-control" required placeholder="Enter Date">
<br>




<label class="form-label" for="firstname">Name:</label>
<select class="form-select" id="name" placeholder="Enter date" name="name">
<option><?php echo $options;?></option></select>
<br>




<label class="form-label" for="firstname">Total KG:</label>
<input type="number" name="kg" id="kg"class="form-control" required placeholder="Enter Total Tea">
<br>

<label class="form-label" for="firstname">Basic Wage:</label><br>
<input type="number" name="wage" id="wage" value="350" class="form-control" required placeholder="Basic Wage" readonly>
  <br>


</div> 


<div class="w3-container w3-cell w3-mobile">






 <label class="form-label" for="firstname">OT:</label>
 <input type="number" name="ot" id="ot" class="form-control" required placeholder="OT">
 <br>



 <label class="form-label" for="firstname">Total Amount:</label>
 <input type="number" name="amount" id="amount" class="form-control" required placeholder="Total Amount">
 <br>


 <label class="form-label" for="remark">Remarks:</label>
<select class="form-select" id="remark" placeholder="Enter remark" name="remark" required>
<option></option>
<option>Third Round 2079</option>
<option>Fouth Round 2079</option>
<option>Fifth Round 2079</option>
<option>Sixth Round 2079</option>
</select>
<br>


</div>
</div>
<button type="submit" name="save_multiple_data" class="btn btn-primary">Save Data</button>

<button type="reset"  class="btn btn-primary">Reset</button>
<br>

                            
</form>
<br>

</div>



    <script>
		$(document).ready(function(){
    	$("#kg, #wage").keyup(function(){
    	var total=0;    	
    	var x = Number($("#kg").val());
    	var y = Number($("#wage").val());
    	var z=x-35;  
        var result=z*2;
        var total=350+result;
    	$('#ot').val(result);
        $('#amount').val(total);
    });
});
</script>

    

   






</br>
<div class="container-fluid bg-success p-3">

<h3 class="text-light">Display data between two dates</h3>

<form method="POST">
<div class="row">

  <div class="col">
<div class="form-floating">
<input type="text" class="form-control nepali-datepicker"  id="nepali-datepicker"  placeholder="Enter email" name="date1">
<label for="email">From Date</label>
</div>
</div>

<div class="col">
<div class="form-floating">
<input type="text" class="form-control" id="nepali-datepicker-1" class="nepali-datepicker" placeholder="Enter password" name="date2">
<label for="pwd">To Date</label>
</div>
</div>

<div >
<br>
<input type="submit" class="btn btn-primary btn-lg"  name="search1" value="Search">
<a class="btn btn-primary btn-lg"  href="View_Bill.php" >View Bills</a>
<a class="btn btn-primary btn-lg"  href="view-bill-record.php" value="View Tea Recoords">View Records</a>

</div>

</div>
</form>
<script type="text/javascript">
           $(document).ready(function(){
    var currentDate = NepaliFunctions.ConvertDateFormat(NepaliFunctions.GetCurrentBsDate(), "YYYY-MM-DD");
    $('#nepali-datepicker-1').nepaliDatePicker({
      ndpYear: true,
    ndpMonth: true,
    
    });

    $('#nepali-datepicker-2').nepaliDatePicker({
      ndpYear: true,
    ndpMonth: true,
    
    });

    $('.nepali-datepicker').nepaliDatePicker({
      ndpYear: true,
    ndpMonth: true,
   
    });
});
        </script>
</div>


<br />
<div class="table-responsive">  
<table id="ni" class="table table-bordered table-striped">
<thead class="bg-success text-light">
<tr>
<th>Total Amount</th>
<th>Date</th>
<th>Name</th>
<th>Total KG</th>
<th>Basic Wage</th>
<th>OT</th>
</tr>
</thead>
<tbody>
<tr>
<?php include 'fetchbillrecord.php'?>
<?php include 'calculateteabill.php'?>
</tr>   
</tbody>
</table>
</div> 
<?php 
        
                $pr_query = "select * from tea_bill ";
                $pr_result = mysqli_query($conn,$pr_query);
                $total_record = mysqli_num_rows($pr_result );
                
                $total_page = ceil($total_record/$num_per_page);

                if($page>1)
                {
                    echo "<a href='employees_bill.php?page=".($page-1)."' class='btn btn-danger'>Previous</a>";
                }

                
                for($i=1;$i<$total_page;$i++)
                {
                    echo "<a href='employees_bill.php?page=".$i."' class='btn btn-primary'>$i</a>";
                }

                if($i>$page)
                {
                    echo "<a href='employees_bill.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
                }
        
        ?>

 

<script>
  $(document).ready(function () {
    $('#ni').DataTable();
});

  </script>


<script>
$(document).ready(function() {
$('table thead th').each(function(i) {
calculateColumn(i);
    });
  });

function calculateColumn(index) {
var total = 0;
$('table tr').each(function() {
var value = parseInt($('td', this).eq(index).text());
if (!isNaN(value)) {
total += value;
  }
  });
$('table tfoot').eq(index).text('Total Rs: ' + total);
  }
</script>



<script src="table2excel/src/jquery.table2excel.js" type="text/javascript"></script>

<script>
    $("#export").click(function(){
        $("#ni").table2excel({

            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
        filename: "Employees Bill",
        preserveColors:true

    });
    });

</script>



</body>
<?php
include "admin-footer.php";
?>

</html>



