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

    $num_per_page = 15;
    $start_from = ($page-1)*15;
    
    $query = "select * from tea_record ORDER BY Tea_ID DESC limit $start_from,$num_per_page";
    $result = mysqli_query($conn,$query);

?>












<?php
require "connection.php";
if(ISSET($_POST['search1'])){
$date1 = date("Y-m-d", strtotime($_POST['date1']));
 $date2 = date("Y-m-d", strtotime($_POST['date2']));
$query=mysqli_query($conn, "SELECT * FROM `tea_record` WHERE `Tea_Date` 
BETWEEN '$date1' AND '$date2'") or 
die(mysqli_error());
$row=mysqli_num_rows($query);
if($row>0){
while($fetch=mysqli_fetch_array($query)){
?>
<tr>
   
   <td><?php echo $fetch['Tea_Total']?></td>
  <td> <?php echo $fetch['Tea_Date']?></td>
  <td> <?php echo $fetch['Name']?></td>
  <td> <?php echo $fetch['Tea_KG']?></td>
  <td> <?php echo $fetch['Tea_Rate']?></td>
  <td> <?php echo $fetch['Remarks']?></td>
        
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
        $query=mysqli_query($conn, "SELECT * FROM tea_record") 
or die(mysqli_error());
        while($fetch=mysqli_fetch_array($result)){
            
?>
    <tr>


  <td ><?php echo $fetch['Tea_Total']?></td>
  <td> <?php echo $fetch['Tea_Date']?></td>
  <td> <?php echo $fetch['Name']?></td>
  <td> <?php echo $fetch['Tea_KG']?></td>
  <td> <?php echo $fetch['Tea_Rate']?></td>
  <td> <?php echo $fetch['Remarks']?></td>

    </tr>

    

<?php


        }
    }
?>




