<?php



if(isset($_POST['save_multiple_data']))
{
    $date = $_POST['date'];
    $name = $_POST['name'];
    $kg=$_POST['kg'];
    $wage=$_POST['wage'];
    $ot=$_POST['ot'];
    $amount=$_POST['amount'];
    $remark=$_POST['remark'];

    include "connection.php";
    $query = "INSERT INTO tea_bill  VALUES ('','$date','$name','$kg','$wage','$ot','$amount',NOW(), '$remark')";
        $query_run = mysqli_query($conn, $query);
  

    if($query_run)
    {
        
        echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Data recorded.
					</div>
					
					
					';
                    header("Location: employees_bill.php");
        
    }
    else
    {
       echo "Error";
        
        exit(0);
    }
}
?>