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

	<div class="container">
	<div class="row">
		<div class="col-sm-9" >
        <h3><i class="fa fa-envelope"></i> Message</h3><hr>  
	<?php 
				include "connection.php";

				
				$sql="SELECT * FROM messages  WHERE ID=$_GET[id]";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
					if($row=$result->fetch_assoc())
					{
						echo "<h4> Name: ".$row['Name']."</br><hr> Email: <small>".$row['Email']."</small></h4>";
						echo "<b> Message: ".$row['Message']."</b></br>";
                        echo"<b>Contact: ".$row['Contact']."</b>";
						echo"<p class='text-info pull-right'>Message Received at ".$row['Logs']."</p>";
						
					}
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