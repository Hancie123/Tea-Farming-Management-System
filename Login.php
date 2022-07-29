

<!DOCTYPE html>
<html>
<head>
<title>Naindra Raj Phago Login Form</title>
<link rel="icon" href="images/logo.jpg">
  <meta charset="UTF-8">
  <meta name="description" content="Naindra Tea Farming is a small tea farm in Badrapur-2, Jhapa, Nepal. The taste of Nepali 
  tea is well-known, and it is marketed worldwide. If you're curious about tea plants and how they grow, keep reading. 
  Through this website, you can reach me directly.">
  <meta name="keywords" content="Naindra Raj Phago, Naindra Tea Farming, Bhadrapur Tea Farm, Jhapa Tea Field, Naindra Tea Phago Login">
  <meta name="author" content="Hancie Phago">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Language" content="en">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  
</head>
<body>
<?php
include "admin-nav.php";
?>
<?php



if(isset($_POST['submit'])){
  

  include ("connection.php");

  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * FROM admin WHERE Username='$username' && Password='$password'";

  $query=mysqli_query($conn,$sql);
  $num_rows=mysqli_num_rows($query);

  $row=mysqli_fetch_array($query);

  if ($num_rows>0){

      session_start();
      $_SESSION['id']=session_id();
      $_SESSION['username']=$username;
      

  
      header("Location: Home.php");
  }
  else{
    echo '<script type="text/javascript">';
    echo ' alert("Incorrect Username and Password")'; 
    echo '</script>';
  }





}

?>










<div class="container mt-5 mb-5">
<div class="row">
<div class="col-sm-5">
<img src="Tablet login-bro.png" alt="logo" style="width:80%"></br>
</div>
<div class="col-sm-7">
  <style>
    #login {

      text-align:center
    }

    #naindra{

      text-align:center
    }

    #username{
      text-align:left
    }

    #password{
      text-align:left
    }

  </style>

  <h2 id="login">LOGIN</h2>
  <p id="naindra">Naindra Tea Farming</p>
  <form  method="post">


  


    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="username" placeholder="Enter email" name="username">
      <label for="email"><i class="bi bi-person-circle"></i>Email</label>
    </div>
    <div class="form-floating mt-3 mb-3">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      <label for="pwd"><i class="bi bi-chat-square-fill"></i>Password</label>
    </div>
    <input  type="submit" class="btn btn-primary" value="Login" name="submit">
  
  </form>
  </div>
</div>    
</div>




</body>
<?php
include ("footer.php");

?>

</html>