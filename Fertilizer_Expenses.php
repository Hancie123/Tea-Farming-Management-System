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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v3.7.min.js" type="text/javascript"></script>
<link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v3.7.min.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="nepali-date-picker.min.js"></script>
<link rel="stylesheet" href="nepali-date-picker.min.css">
<?php include "Admin-Side-Nav.php" ?>
</head>
<body>


<script>
     $(document).ready(function(){
	   $("#myTable").dataTable();
	 });
   
   </script>


<div class="container-fluid mt-3 shadow" >

  <h2 style="text-align:center">Fertilizer Expenses Management System</h2>
  <p style="text-align:center">Naindra Tea Farming</p>
  <form action="function_fertilizer.php" method="post">

<div class="row  ">
    
<div class="col-sm-5">

<div class="form-floating mb-3 mt-3">
<input type="text" class="form-control" id="nepali-datepicker" placeholder="Enter date" name="date">
<label for="name">Date</label>
</div>


<div class="form-floating mb-3 mt-3">
<select class="form-select" id="name" name="name">
        <option>Nitrogen</option>
        <option>Phosphorus</option>
        <option>Potassium</option>
        
      </select>
<label for="name">Fertilizer</label>
</div>

<div class="form-floating mt-3 mb-3">
<select class="form-select" id="quantity" name="quantity">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
      </select>
<label for="number">Quantity</label>
</div>
</div>


<div class="col-sm-5">
<div class="form-floating mt-3 mb-3">
<input type="number" class="form-control" id="rate" placeholder="Enter rate" name="rate">
<label for="address">Rate</label>
</div>

<div class="form-floating mt-3 mb-3">
<input type="number" class="form-control" id="amount" placeholder="Enter amount" name="amount">
<label for="address">Total Amount</label>
</div>



</div>
</div>
<button type="submit" name="submit"class="btn btn-primary">Submit</button>

<button type="reset" class="btn btn-primary">Reset</button>

<a href="Fertilizer_Data.php" class="btn btn-primary">View Report</a>
</form>
<hr>
</div>
</div>

<script type="text/javascript">
            window.onload = function() {
                var mainInput = document.getElementById("nepali-datepicker");
                mainInput.nepaliDatePicker();
            };
        </script>


<script>
		$(document).ready(function(){
    	// Get value on keyup funtion
    	$("#quantity, #rate").keyup(function(){

    	var total=0;    	
    	var x = Number($("#quantity").val());
    	var y = Number($("#rate").val());
    	var total=x * y;  

    	$('#amount').val(total);

    });
});
</script>


<table id="myTable" class="table table-hover table-striped">
<thead class="bg-success text-light">
    <tr>
    <th>ID</th>
    <th>Date</th>
    <th>Products</th>
    <th>Quantity</th>
    <th>Rate</th>
    <th>Total</th>
    
</tr>
</thead>
<tbody>
   
    <?php
include "connection.php";

$sql="SELECT * FROM fertilizer";

$query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($query)){

?>
 <tr>
 <td><?php echo $row['Fertilizer_ID'];?> </td>
 <td><?php echo $row['Date'];?> </td>
<td><?php echo $row['Name'];?> </td>
<td><?php echo $row['Quantity'];?> </td>
<td><?php echo $row['Rate'];?> </td>
<td><?php echo $row['Total'];?> </td>

</tr>
<?php

}

?>



</tbody>


</table>




</body>

<?php
include "admin-footer.php";
?>

</html>



