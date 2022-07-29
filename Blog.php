<?php 
include "nav.php";
?>

<?php 

require_once('connection.php');


?>


<?php
require('connection.php');


if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$post_per_page=4;
$result=($page-1)*$post_per_page;

// $result = 0
// $result = 5;
// $result = 10

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
<form>
    <div class="input-group">
  <input type="search" class="form-control rounded" placeholder="Search" name="search" aria-label="Search" aria-describedby="search-addon" />
  <button type="submit" class="btn btn-warning">search</button>
</div>
</form>

  </div>


<?php 
                  include "connection.php";

                  
                  if(isset($_GET['search'])){
                    $keyword = $_GET['search'];
                    $postQuery="SELECT * FROM blog WHERE Title LIKE '%$keyword%' ORDER BY Blog_ID DESC LIMIT $result,$post_per_page";
                  }else{
                   $postQuery="SELECT * FROM blog ORDER BY Blog_ID DESC LIMIT $result,$post_per_page";
                  }
                 
                  $runPQ=mysqli_query($conn,$postQuery);
                  while($row=mysqli_fetch_array($runPQ)){
                    ?>
</br>

<div class="container">
  
<a href="Blog_Post.php?id=<?=$row['Blog_ID']?>" style="text-decoration:none;color:black">

        
        <div class="card" style="max-width: 800px;">
            <div class="row">
              <div class="col-md-5">
               <img src="<?php echo $row[2];?>" width=300px height="200px" alt="Blog Post" class="img-fluid mx-auto d-block">
              </div>
              <div class="col">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row[1];?></h5>
                  <p class="card-text"><?php echo $row[4];?></p>
                  <p class="card-text"><small class="text-muted">Posted: <?php echo $row[5];?></small></p>
                </div>
              </div>
            </div>
          </div>

                  </div>

                 
<?php




                    

                  }
                
?>
<br>
<?php
if(isset($_GET['search'])){
  $keyword=$_GET['search'];
$q="SELECT * FROM blog WHERE Title LIKE '%$keyword%'";

}else{
  $q="SELECT * FROM blog";

}
$r=mysqli_query($conn,$q);
$total_posts=mysqli_num_rows($r);
$total_pages=ceil($total_posts/$post_per_page);

?>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
        <?php
if($page>1){
  $switch="";
}else{
  $switch="disabled";
}
if($page<$total_pages){
  $nswitch="";
}else{
  $nswitch="disabled";
}
        ?>
          <li class="page-item <?=$switch?>">
            <a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$page-1?>" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <?php
for($opage=1;$opage<=$total_pages;$opage++){
  ?>
          <li class="page-item"><a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$opage?>"><?=$opage?></a></li>

  <?php
}
          ?>
          
          <li class="page-item <?=$nswitch?>">
            <a class="page-link" href="?<?php if(isset($_GET['search'])){echo "search=$keyword&";}?>page=<?=$page+1?>">Next</a>
          </li>
        </ul>
      </nav>
</body>
<?php include"footer.php"; ?>

</html>
