<?php 
include "nav.php";
?>

<!-- Page Content -->
<div class="container" style="margin-top:70px;">

<div class="row">
    <div class="col-md-8">
    <?php
        if(isset($_POST["submit"]))
        {
            include "connection.php";
         $sql="INSERT INTO messages (Name, Contact, Email, Message,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}',NOW());";
            if($conn->query($sql))
    {
        echo '
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Your message has been Successfully sent.
        </div>
        
        
        ';
    }
        }
    ?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<h3 class='text-primary'>Send us a Message</h3>
<form method="post" action="contactmessage.php" role="form" >
<div class="control-group form-group">
<div class="controls">
<label>Full Name:</label>
<input type="text" class="form-control" name="name" required>
<p class="help-block"></p>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Phone Number:</label>
<input type="tel" class="form-control" name="phone" required>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Email Address:</label>
<input type="email" class="form-control" name="email"  >
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Message:</label>
<textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
</div>
</div>
<div id="success"></div></br>
<!-- For success/fail messages -->
<button type="submit" class="btn btn-primary" name="submit"> Send Message</button>
</form>
    
</div>

<div class="col-md-4">
<h3 class='text-primary'>Contact Details</h3>
<p>
        Naindra Tea Farming, <br>
        Bhadrapur-2,<br>
        Jhapa, Nepal,<br>
        naindrarajphago@gmail.com.
</p>
<p> <abbr title="Phone">Phone</abbr>: +977 9816043149</p>
<p><abbr title="Email">Email</abbr>: <a href="mailto:naindrarajphago@gmail.com" >naindrarajphago@gmail.com</a>
</p>
<p><abbr title="Developer">Developer</abbr>: Hancie Wanem Phago</p>
<p><abbr title="Website">Website</abbr>: <a href="https://www.phagohancie.com.np/">www.phagohancie.com.np</a></p>
</div>
</div>
<hr>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>



</body>
<?php include"footer.php"; ?>

</html>
