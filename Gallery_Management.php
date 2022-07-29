<?php
session_start();
include("connection.php");
 if(!isset($_SESSION['username']))
 {
	 header("location:Login.php");
 }
?>

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

    $num_per_page = 05;
    $start_from = ($page-1)*05;
    
    $query = "select * from image limit $start_from,$num_per_page";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<link rel="icon" href="images/logo.jpg">
<link rel="stylesheet" href="employees.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="Scripts/jquery-3.5.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<?php include "Admin-Side-Nav.php" ?>
   
<br>
<div class="container-fluid bg-success  p-2 text-light" style="border-radius:4px">
<h2 class="text-center">Upload Images</h2>
<form method="post" enctype="multipart/form-data" >

<input type="file" id="image" name="image" class="form-control"><br>
<input type="submit" name="submit" value="Upload" class="btn btn-primary">

</form>

</div>


<?php
if(isset($_POST['submit'])){

include "connection.php";

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$image_name=addslashes($_FILES['image']['name']);
$image_size=addslashes($_FILES['image']['tmp_name']);

move_uploaded_file($_FILES['image']['tmp_name'], "upload/" .$_FILES['image']['name']);
$location="upload/".$_FILES['image']['name'];

$sql="INSERT INTO image (location) values ('$location')";
$query=mysqli_query($conn, $sql);

if($query){
    echo "Uploaded";
}

else {
    echo "Error";
}


}


?>

<div class="container-fluid ">

        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Delete Gallery Images
                           
                        </h4>
                    </div>


                   


                    <div class="card-body " >
<table class="table table=striped table-hover">
                       <tr class="table-dark">
                    <th>Image ID</th>
                    <th>Images</th>
                    <th>Action</th>
</tr>


<?php
include "connection.php";

$sql="SELECT * FROM image";
$query=mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){

?>
<tr>
<td><?php echo $row['image_id'];?></td>



<td>
    <img src="<?php echo $row['location']; ?>" width="100px" alt="image" >
</td>

<td>
    <form  method="post">
    <input type="hidden" value="<?php echo $row['image_id'];?>"   name="image_id" class="btn btn-primary" value="Delete">
    <input type="hidden" value="<?php echo $row['location']; ?>" name="image" class="btn btn-primary" value="Delete">
    <input type="submit" name="delete" class="btn btn-primary" value="Delete">

</form>

</tr>


<?php
}



?>






                                   
</table>

<?php

$pr_query = "select * from image ";
    $pr_result = mysqli_query($conn,$pr_query);
    $total_record = mysqli_num_rows($pr_result );
                
    $total_page = ceil($total_record/$num_per_page);

    if($page>1)
    {
    echo "<a href='Gallery_Management.php?page=".($page-1)."' class='btn btn-danger'
>Previous</a>";
    }

                
    for($i=1;$i<$total_page;$i++)
    {
    echo "<a href='Gallery_Management.php?page=".$i."' class='btn btn-primary'>$i</a>";
    }

    if($i>$page)
    {
    echo "<a href='Gallery_Management.php?page=".($page+1)."' class='btn btn-danger'
>Next</a>";
    }

    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




 <?php

 if(isset($_POST['delete'])){

    $image_id=$_POST['image_id'];
    $image=$_POST['image'];

    include "connection.php";

    $sql="DELETE FROM image WHERE image_id='$image_id'";

    $query=mysqli_query($conn, $sql);

    if($query){
        
        unlink("upload/".$image);
        echo "Deleted";
    }

    else {
        echo "error";
    }





 }


?>

</body>
<?php
include "admin-footer.php";
?>

</html>



