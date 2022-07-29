<?php
session_start();
include("connection.php");
 if(!isset($_SESSION['username']))
 {
	 header("location:Login.php");
 }
?>

<?php
include "connection.php";
$query = "SELECT * FROM `admin`";
$result = mysqli_query($conn, $query);
$options = "";

while($row = mysqli_fetch_array($result))
{
    $options = $options."<option>$row[1]</option>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Naindra Raj Phago</title>
<link rel="icon" href="images/logo.jpg">
<link rel="stylesheet" href="employees.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="Scripts/jquery-3.5.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>

  
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<?php include "Admin-Side-Nav.php" ?>



    <div class="container-fluid ">
      <h1 style="text-align:center">Blog Management System</h1>
        <div class="row">
            <div class="col-md-12">

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Post your blog
                        <a href="Delete_Blog.php" class="add-more-form float-end btn btn-primary">Delete Blog</a>
                            
                        </h4>
                    </div>


                    <div class="card-body " >

                    <div class="container-fluid bg-success m-2 p-2 text-light" style="border-radius:4px">

<form action="function_blog.php" method="post" enctype="multipart/form-data" >

<div class="mb-3 mt-3">
    <label for="title" class="form-label">Title:</label>
    <input type="text" class="form-control" id="title" placeholder="Enter blog title" name="title">
  </div>

  <div class="mb-3 mt-3">
<input type="file" id="image" name="image" class="form-control">
</div>

<div class="mb-3 mt-3">
    <label for="title" class="form-label">Description:</label>
    <textarea  class="form-control" id="title" placeholder="Enter blog description" name="description"></textarea>
  </div>


<div class="mb-3 mt-3">
<label for="name">Author</label>
<select class="form-select" id="author" placeholder="Enter Author Name" name="author">
<option><?php echo $options;?></option></select> 
</div>

<div class="mb-3 mt-3">
<div id="toolbar-container"></div>

    <!-- This container will become the editable. -->
    <textarea id="editor" name="editor">
        <p>Hello <?php echo $_SESSION['username']?> ! Please post some interesting blogs from here.</p>
</textarea>
  </div>

<input type="submit" name="submit" value="Post" class="btn btn-primary">

</form>

</div>




<script>
CKEDITOR.replace('editor');
</script>





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



