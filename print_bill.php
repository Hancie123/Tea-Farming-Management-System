<?php
session_start();
include "connection.php";
if(!isset($_SESSION['username'])){
  header("Location: Login.php");
}
?>
<?php  
include "connection.php";
$id=$_SESSION['id'];
 $query = "SELECT SUM(Total_Amount) as Amount FROM tea_bill";  
 $result = mysqli_query($conn, $query);  
 ?> 

<!DOCTYPE html>
<html>
<head>
<title>Tea Bill Records</title>
<link rel="icon" href="images/logo.jpg">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<link rel="stylesheet" type="text/css" href="CSS/datatables.min.css" />
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>

<?php include "Admin-Side-Nav.php" ?>


<style>
        .dt-buttons a {
            margin-left: 12px;
            font-size: 12px;
            padding: 6px;
            border: 1px solid #e4e4e4;
            background: #FFF;
            box-shadow: 0px 0px 14px 0px #ececec;
        }
        
       
    </style>


<div class="w3-card-4 pt-2">
<div class="w3-container bg-success text-light">
  <h2>Tea Bill Records</h2>
</div>
<br />
<div class="table-responsive">  
<table id="example" class="table table-border table-striped table-hover">
<thead class="bg-success text-light">
<tr>
                                
<th>Date</th>
<th>Name</th>
<th>Total KG</th>
<th>Basic Wage</th>
<th>OT</th>
<th>Total Amount</th>
</tr>
</thead>
                           
</table>
<br>
</div> 


<script type="text/javascript" src="js/datatables.min.js"></script>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {
 
        $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "Fetch/bill_fetch.php",
                type: "POST"
            },
            dom: 'lBfrtip',
            buttons: [
                'excel', 'print'
            ],
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });
 
    });


    

    </script>


</div>
</div>


</body>

</html>



