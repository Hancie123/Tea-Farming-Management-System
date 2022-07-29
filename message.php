<?php
session_start();
include("connection.php");
if(!isset($_SESSION['username'])){
    header ("Location:Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Inbox Messages</title>
<link rel="icon" href="images/logo.jpg">
<link rel="stylesheet" href="employees.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php include "Admin-Side-Nav.php" ?>

<div class="container"  style='margin-top:20px;'>
<div class="row">
<div class="col-sm-9" >
<h3 class="text-primary"><i class="fa fa-envelope"></i> Inbox </h3><hr>    
			
<?php 
$sql="SELECT * FROM messages ORDER BY ID DESC";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo '<ul class="list-group">';
while($row=$result->fetch_assoc())
{
if($row['ID']=='1')
{
echo '<li class="list-group-item active">
<span>
<b><i class="fa fa-envelope-square"> </i>      	'.$row["Name"].'</b>: '.substr($row["Message"],0,50).'....
</span>
<span   class="pull-right">
<i>'.$row['Logs'].'</i>&nbsp;
<a href="messageview.php.php?id='.$row['ID'].'" class="btn btn-primary  btn-xs">View</a>
<a href="admin_mess_del.php?id='.$row['ID'].'"  class="btn btn-danger btn-xs">Delete</a>
</span>
</li>';
	}
else
	{
	echo '<li class="list-group-item">
	<span>
	<b><i class="fa fa-envelope-square
"></i> '.$row["Name"].'</b>: '.substr($row["Message"],0,50).'....
</span>
<span   class="pull-right">
<i>'.$row['Logs'].'</i>&nbsp;
<a href="messageview.php?id='.$row['ID'].'" class="btn btn-primary btn-xs">View</a>
<a href="admin_mess_del.php?id='.$row['ID'].'"  class="btn btn-danger btn-xs">Delete</a>
</span>
</li>';
	}
echo"<br>";
	}
	echo'</ul>';
}
else
{
	echo "<div class='alert alert-info mess'>No More Messages</div>";
}
?>
</div>
</div>
</div>


</body>
<?php
include "admin-footer.php";
?>
</html>