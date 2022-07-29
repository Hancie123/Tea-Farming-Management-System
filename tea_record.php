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
    
 <div class="container-fluid mt-3 shadow" >

  <h2 style="text-align:center">Tea Record Management System</h2>
  <p style="text-align:center">Naindra Tea Farming</p>
  <form action="function_tea_record.php" method="post">

<div class="row  ">
    
<div class="col-sm-5">

<?php
include "connection.php";
$query = "SELECT * FROM `admin`";
$result = mysqli_query($conn, $query);
$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[1]</option>";
}

?>

<div class="form-floating mb-3 mt-3">
<input type="text" id="nepali-datepicker-2" class="form-control" id="date" placeholder="Enter date" name="date">
<label for="name">Date</label>
</div>


<div class="form-floating mb-3 mt-3">
<select class="form-select" id="date" placeholder="Enter date" name="name">
<option><?php echo $options;?></option></select> 
<label for="name">Maintained by</label>
</div>

<div class="form-floating mt-3 mb-3">
<input type="number" class="form-control" id="tea" placeholder="Enter tea" name="tea">
<label for="number">Tea KG</label>
</div>
</div>
<div class="col-sm-5">
<div class="form-floating mt-3 mb-3">
<input type="number" class="form-control" id="rate" placeholder="Enter rate" name="rate">
<label for="address">Tea Rate</label>
</div>

<div class="form-floating mt-3 mb-3">
<input type="number" class="form-control" id="amount" placeholder="Enter amount" name="amount">
<label for="address">Total Amount</label>
</div>


<div class="form-floating mt-3 mb-3">
<select class="form-select" id="remark" placeholder="Enter remark" name="remark" required>
<option></option>
<option>Third Round 2079</option>
<option>Fouth Round 2079</option>
<option>Fifth Round 2079</option>
<option>Sixth Round 2079</option>
</select>
<label for="address">Remarks</label>
</div>


</div>
</div>
<button type="submit" name="submit"class="btn btn-primary">Submit</button>

<button type="reset" class="btn btn-primary">Reset</button>
</form>
<hr>
</div>
</div>
</br>



<script>
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#tea, #rate").keyup(function(){

    	var total=0;    	
    	var x = Number($("#tea").val());
    	var y = Number($("#rate").val());
    	var total=x * y;  

    	$('#amount').val(total);

    });
});
</script>



<div class="container-fluid bg-success p-3">

<h3 class="text-light">Display data between two dates</h3>

<form method="POST">
<div class="row">

  <div class="col">
<div class="form-floating">
<input type="text" class="form-control nepali-datepicker"  id="nepali-datepicker" placeholder="Enter email" name="date1">
<label for="email">From</label>
</div>
</div>
<div class="col">

<div class="form-floating">
<input type="text" class="form-control" id="nepali-datepicker-1" class="nepali-datepicker" placeholder="Enter password" name="date2">
<label for="pwd">To</label>
</div>
</div>

<div >
  <br>
<input type="submit" class="btn btn-primary btn-lg"  name="search1" value="Search">
<a class="btn btn-primary btn-lg"  id="export">Export to Excel</a>
<a class="btn btn-primary btn-lg"  href="view-tea-record.php" value="View Tea Recoords">View Recoords</a>
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
<table id="sum_table" class="table table-bordered table-striped">
<thead class="bg-success text-light">
<tr>
<th>Tea Total</th>
<th>Date</th>
<th>Recorded By</th>
<th>Tea KG</th>
<th>Tea Rate</th>

<th>Tea Remarks</th>
</tr>
</thead>
<tbody>
<?php include 'fetchtearecord.php'?>
<?php include 'calculatetearecord.php'?>   
</tbody>
</table>



</div>  


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

<script>
  $(document).ready(function () {
    $('#sum_table').DataTable();

    
});

  </script>




<script src="table2excel/src/jquery.table2excel.js" type="text/javascript"></script>

<script>
    $("#export").click(function(){
        $("#sum_table").table2excel({

            // exclude CSS class
            exclude: ".noExl",
            name: "Worksheet Name",
        filename: "Tea Records" //do not include extension
    });
    });

</script>
















</body>

<?php
include "admin-footer.php";
?>

</html>



