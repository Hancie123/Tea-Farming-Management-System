<?php 

    require_once('connection.php');

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 50;
    $start_from = ($page-1)*50;
    
    $query = "select * from tea_bill ORDER BY TeaBill_ID DESC limit $start_from,$num_per_page ";
    $result = mysqli_query($conn,$query);

?>












<?php
require "connection.php";
if(ISSET($_POST['search1'])){
$date1 = date("Y-m-d", strtotime($_POST['date1']));
 $date2 = date("Y-m-d", strtotime($_POST['date2']));
$query=mysqli_query($conn, "SELECT * FROM `tea_bill` WHERE `date` 
BETWEEN '$date1' AND '$date2'") or 
die(mysqli_error());
$row=mysqli_num_rows($query);
if($row>0){
while($fetch=mysqli_fetch_array($query)){
?>
<tr>
   
  <td> <?php echo $fetch['Total_Amount']?></td>  
  <td> <?php echo $fetch['date']?></td>
  <td> <?php echo $fetch['Name']?></td>
  <td> <?php echo $fetch['Total_KG']?></td>
  <td> <?php echo $fetch['Basic_Wage']?></td>
  <td> <?php echo $fetch['OT']?></td>
  
        
</tr>
<?php

}
    }else{
    echo'
    <tr>
    <td colspan = "4"><center>Record Not Found</center></td>
    </tr>';
        }
    }
    
   
    else{
        $query=mysqli_query($conn, "SELECT * FROM `tea_bill` ORDER BY TeaBill_ID DESC") 
or die(mysqli_error());
        while($fetch=mysqli_fetch_array($result)){
            
?>
    <tr>


<td> <?php echo $fetch['Total_Amount']?></td>  
  <td> <?php echo $fetch['date']?></td>
  <td> <?php echo $fetch['Name']?></td>
  <td> <?php echo $fetch['Total_KG']?></td>
  <td> <?php echo $fetch['Basic_Wage']?></td>
  <td> <?php echo $fetch['OT']?></td>

    </tr>

    

<?php


        }
    }
?>




