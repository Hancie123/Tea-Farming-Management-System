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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<style>

@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  text-decoration: none;
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}
</style>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php include "Admin-Side-Nav.php" ?>

    <div class="container-fluid">
<h1 class="text-center" style="margin-top:30px;">Backup  Database</h1>
<hr>
<div class="row justify-content-center">
<div class="col-sm-6">
<div class="card">
<div class="card-body">
<h3 style="text-align:center">Database Credential</h3>
<br>
<form method="POST" action="backup.php">
<div class="form-group row">
<label for="server" class="col-sm-3 col-form-label">Server</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="server" placeholder="sql305.epizy.com" value="sql305.epizy.com"required readonly></br>
</div>
</div>
<div class="form-group row">
<label for="username" class="col-sm-3 col-form-label">Username</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="username" placeholder="epiz_31926551" value="epiz_31926551"required readonly></br>
</div>
</div>
<div class="form-group row">
<label for="password" class="col-sm-3 col-form-label">Password</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="password" placeholder="WhRzlwLk4OSZy" value="WhRzlwLk4OSZy"readonly></br>
</div>
</div>
<div class="form-group row">
<label for="dbname" class="col-sm-3 col-form-label">Database</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="dbname" placeholder="epiz_31926551_tea" value="epiz_31926551_tea"required readonly></br>
</div>
</div>
<button type="submit" class="btn btn-primary" name="backup">Backup</button>
</form>
</div>
</div>
</div>
</div>
</div>
      
   



</body>

<?php
include "admin-footer.php";
?>

</html>


