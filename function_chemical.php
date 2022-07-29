<?php
if(isset($_POST['submit'])){



$date=$_POST['date'];
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$rate=$_POST['rate'];
$total=$_POST['amount'];
$remark=$_POST['remark'];


include ('connection.php');

$sql="INSERT INTO chemical VALUES ('', '$date', '$name', '$quantity', '$rate','$total','$remark')";

$query=mysqli_query($conn, $sql);

if($query){

 header("Location:Tea_Chemicals.php");
 
}

else {

  echo "Error";
}


}
?>