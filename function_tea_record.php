<?php
if(isset($_POST['submit'])){

$date=$_POST['date'];
$name=$_POST['name'];
$tea=$_POST['tea'];
$rate=$_POST['rate'];
$total=$_POST['amount'];
$remark=$_POST['remark'];

include ('connection.php');

$sql="INSERT INTO tea_record VALUES ('', '$date', '$name', '$tea', '$rate','$total', '$remark'    , NOW())";

$query=mysqli_query($conn, $sql);

if($query){

  echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Tea record is recorded.
					</div>
					
					
					';

                    header("Location: tea_record.php");
}

else {

  echo "Error";
}


}
?>