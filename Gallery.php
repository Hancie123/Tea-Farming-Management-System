<?php 
include "nav.php";
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
<br><br>
<?php

$sql="SELECT * FROM image";

include "connection.php";
$query=mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($query))
{
?>


<img src="<?php echo $row['location']; ?>" style=width:200px height=300px id="image">


<?php
}

?>

<style>
    #image{

        margin:10px
    }

</style>

</body>
<?php include"footer.php"; ?>

</html>
