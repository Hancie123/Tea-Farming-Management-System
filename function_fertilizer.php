<?php
if(isset($_POST['submit'])){



$date=$_POST['date'];
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$rate=$_POST['rate'];
$total=$_POST['amount'];


include ('connection.php');

$sql="INSERT INTO fertilizer VALUES ('', '$date', '$name', '$quantity', '$rate','$total')";

$query=mysqli_query($conn, $sql);

if($query){

 header("Location:Fertilizer_Expenses.php");
 
}

else {

  echo "Error";
}


}
?>