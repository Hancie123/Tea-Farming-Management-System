<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
<a href="https://www.phagohancie.com.np/" class="navbar-brand">Hancie e-Learning Studio</a>
</div>
</nav>
<div class="col-md-3"></div>
<div class="col-md-6 well">
<h3 class="text-primary">PHP - Filter Range Of Date With MySQLi</h3>
<hr style="border-top:1px dotted #000;"/>
<form class="form-inline" method="POST" action="">
<label>Date:</label>
<input type="date" class="form-control" placeholder="Start"  name="date1"/>
<label>To</label>
<input type="date" class="form-control" placeholder="End"  name="date2"/>
<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button> <a href="index.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
</form>
<br /><br />
<div class="table-responsive">	
<table class="table table-bordered">
<thead class="alert-info">
<tr>
<th>ID</th>
<th>Name</th>
<th>DOB</th>
</tr>
</thead>
<tbody>
<?php include 'employeesfetch.php'?>	
</tbody>
</table>
</div>	
</div>
</body>
</html>