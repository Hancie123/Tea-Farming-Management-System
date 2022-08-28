<?php
    require "connection.php";
    if(ISSET($_POST['search'])){
        $date1 = date("Y-m-d", strtotime($_POST['date1']));
        $date2 = date("Y-m-d", strtotime($_POST['date2']));
        $query=mysqli_query($conn, "SELECT * FROM `admin` WHERE `DOB` BETWEEN '$date1' AND '$date2'") or 
        die(mysqli_error());
        $row=mysqli_num_rows($query);
        if($row>0){
            while($fetch=mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $fetch['Admin_ID']?></td>
        <td><?php echo $fetch['Name']?></td>
        <td><?php echo $fetch['DOB']?></td>
        
    </tr>
<?php
            }
        }else{
            echo'
            <tr>
                <td colspan = "4"><center>Record Not Found</center></td>
            </tr>';
        }
    }else{
        $query=mysqli_query($conn, "SELECT * FROM `admin`") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
?>
    <tr>
        <td><?php echo $fetch['Admin_ID']?></td>
        <td><?php echo $fetch['Name']?></td>
        <td><?php echo $fetch['DOB']?></td>
       
    </tr>
<?php
        }
    }
?>