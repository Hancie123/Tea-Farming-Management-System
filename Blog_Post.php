<?php 
include "nav.php";
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

    $num_per_page = 03;
    $start_from = ($page-1)*03;
    
    $query = "select * from blog limit $start_from,$num_per_page";
    $result = mysqli_query($conn,$query);

?>

<html lang="en">
<head>
<title>Naindra Raj Phago</title>
<link rel="icon" href="images/logo.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" src="CSS/bootstrap.css">

</head>
<body>
<div class="container-fluid bg-success text-light p-3 ">
    <h2 class="text-center">Naindra Raj Phago Personal Blogs</h2>
</form>

  </div>


<?php include_once('connection.php'); ?>
<div>
    <div class="container-fluid m-auto mt-3">
        <div class="col">
        <?php
        $post_id=$_GET['id'];
$postQuery="SELECT * FROM blog WHERE Blog_ID=$post_id";
$runPQ=mysqli_query($conn,$postQuery);
$post=mysqli_fetch_assoc($runPQ);
        ?>
            <div class="card mb-3">
           
                <div class="card-body">
                  <h1 class="card-title"><?=$post['Title']?></h1><br>
                  <img src="<?=$post['Image']?>" width=500vw height="50%" alt="Blog Post" style="overflow:auto" class="img-fluid max-width: 100% mx-auto d-block">
                  
                  
                  <div class="container" style="overflow:auto"><?php echo $post['Body'];?></div>
                  <div class="badge bg-primary mb-1">Posted on <?php echo $post['Date'];?></div><br>
                  <div class="badge bg-success text-light">Author:<?php echo $post['Author'];?></div>
                  

</div>
</div>
</div>
</div>
<?php




?>

</body>
<?php include"footer.php"; ?>

</html>
