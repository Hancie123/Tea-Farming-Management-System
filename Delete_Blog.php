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
    
    $query = "select * from blog limit $start_from,$num_per_page";
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



<div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Delete Blog Posts
                        <a href="Blog_Management.php" class="add-more-form float-end btn btn-primary">Back</a>
                        </h4>
                    </div>


                   


                    <div class="card-body " >
<table class="table table=striped table-hover">
                       <tr class="bg-success text-light">
                    <th>Blog ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
</tr>


<?php
include "connection.php";


while($row=mysqli_fetch_array($result)){

?>
<tr>
<td><?php echo $row['Blog_ID'];?></td>
<td><?php echo $row['Title'];?></td>
<td>
    <img src="<?php echo $row['Image']; ?>" width="100px" height="100px" alt="image" >
</td>
<td><?php echo $row['Author'];?></td>
<td><?php echo $row['Description'];?></td>
<td><?php echo $row['Date'];?></td>

<td>
    <form  action="function_blog.php" method="post">
    <input type="hidden" value="<?php echo $row['Blog_ID'];?>"   name="blog_id" class="btn btn-primary" value="Delete">
    <input type="hidden" value="<?php echo $row['Image']; ?>" name="image" class="btn btn-primary" value="Delete">
    <input type="submit" name="delete" class="btn btn-primary" value="Delete">

</form>

</tr>


<?php
}



?>






                                   
</table>

<?php

$pr_query = "select * from blog ";
    $pr_result = mysqli_query($conn,$pr_query);
    $total_record = mysqli_num_rows($pr_result );
                
    $total_page = ceil($total_record/$num_per_page);

    if($page>1)
    {
    echo "<a href='Delete_Blog.php?page=".($page-1)."' class='btn btn-danger'
>Previous</a>";
    }

                
    for($i=1;$i<$total_page;$i++)
    {
    echo "<a href='Delete_Blog.php?page=".$i."' class='btn btn-primary'>$i</a>";
    }

    if($i>$page)
    {
    echo "<a href='Delete_Blog.php?page=".($page+1)."' class='btn btn-danger'
>Next</a>";
    }

    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
<?php
include "admin-footer.php";
?>

</html>



