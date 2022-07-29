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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


<?php include "Admin-Side-Nav.php" ?>
 

<br>



<div class="container-fluid">
<table id="excel" class="table table-hover">
<thead class="bg-success text-light">
<tr>
<th>Name</th>
<th>DOB</th>
<th>Mobile</th>
<th>Action</th>

</tr>
</thead>
<?php
include "connection.php";
$sql="SELECT * FROM admin";

$query=mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($query)) {
?>

<tr>
  <td> <?php echo $row['Name']?></td>
  <td> <?php echo $row['DOB']?></td>
  <td> <?php echo $row['Mobile']?></td>
  <td> 
    
  <a type="button" class="btn btn-primary" href="view-admin.php?id=<?=$row['Admin_ID']?>"><i class="bi bi-info-circle-fill"></i>Details</a>

</td>
  
<?php  
}
?>





</table>

</body>

<?php
include "admin-footer.php";
?>

</html>




