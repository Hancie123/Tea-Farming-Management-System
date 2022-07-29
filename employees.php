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
  
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>

</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


<?php include "Admin-Side-Nav.php" ?>
 <div class="container-fluid mt-3 shadow" >

  <h2 style="text-align:center">Employees Management System</h2>
  <p style="text-align:center">Fill employees detail</p>
  <form action="function_employees.php" method="post">

<div class="row  ">
    
<div class="col-sm-5">
<div class="form-floating mb-3 mt-3">
<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
<label for="name">Name</label>
</div>

<div class="form-floating mt-3 mb-3">
<input type="number" class="form-control" id="number" placeholder="Enter mobile" name="mobile">
<label for="number">Mobile No</label>
</div>
</div>
<div class="col-sm-5">
<div class="form-floating mt-3 mb-3">
<input type="address" class="form-control" id="address" placeholder="Enter address" name="address">
<label for="address">Address</label>
</div>
</div>
</div>
<button type="submit" name="submit"class="btn btn-primary">Save Record</button>

<button type="reset" class="btn btn-primary">Reset</button>
</form>
<br>
</div>
</div>
</br>



<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `employees` WHERE CONCAT(`Employees_ID`, `Name`,
 `Mobile`, `Address`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `employees`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)

{
  include "connection.php";
    
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}

?>


<div class="container-fluid-sm-4">
<table id="hancie"class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>ID</th>
<th>Name</th>
<th>Mobile</th>
<th>Address</th>
</tr>
</thead>
<?php
include "connection.php";
$sql="SELECT * FROM employees";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($search_result)) {
?>

<tr>
  <td> <?php echo $row['Employees_ID']?></td>
  <td> <?php echo $row['Name']?></td>
  <td> <?php echo $row['Mobile']?></td>
  <td> <?php echo $row['Address']?></td>


<?php  
}
?>

</table>

<script>
  $(document).ready(function () {
    $('#hancie').DataTable();
});

  </script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
</body>
<?php
include "admin-footer.php";
?>

</html>



