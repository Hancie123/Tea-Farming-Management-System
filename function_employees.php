<?php
if(isset($_POST['submit'])){

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

include ('connection.php');

$sql="INSERT INTO employees VALUES ('', '$name', '$mobile', '$address')";

$query=mysqli_query($conn, $sql);

if($query){
  echo "Employess is added successfully";

  header("Location:employees.php");
}

else {

  echo "Error";
}




}



?>