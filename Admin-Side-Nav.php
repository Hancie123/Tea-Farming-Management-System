<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="Home.php" class="w3-bar-item w3-button"><i class="bi bi-house-fill"></i>Home</a>
  <a href="profile.php" class="w3-bar-item w3-button"><i class="bi bi-people-fill"></i>Accounts</a>
  <a href="employees.php" class="w3-bar-item w3-button"><i class="bi bi-people-fill"></i>Employees Record</a>
  <a href="employees_bill.php" class="w3-bar-item w3-button"><i class="bi bi-cash-stack"></i>Employees Bill</a>
  <a href="tea_record.php" class="w3-bar-item w3-button"><i class="bi bi-file-earmark-bar-graph"></i>Tea Records</a>
  <a href="Tea_Chemicals.php" class="w3-bar-item w3-button"><i class="bi bi-file-earmark-medical-fill"></i>Chemical Expenses</a>
  <a href="Fertilizer_Expenses.php" class="w3-bar-item w3-button"><i class="bi bi-explicit-fill"></i>Fertilizer Expenses</a>
  <a href="message.php" class="w3-bar-item w3-button"><i class="bi bi-inboxes-fill"></i>Inbox</a>
  <a href="Gallery_Management.php" class="w3-bar-item w3-button"><i class="bi bi-card-image"></i>Gallery</a> 
  <a href="Blog_Management.php" class="w3-bar-item w3-button"><i class="bi bi-postcard"></i>Blogs</a>
  <a href="events-calender.php" class="w3-bar-item w3-button"><i class="bi bi-calendar-event-fill"></i>Tea Events</a>
  <a href="index2.php" class="w3-bar-item w3-button"><i class="bi bi-back"></i>Backup</a>
  <a href="Logout.php" class="w3-bar-item w3-button"><i class="bi bi-box-arrow-right"></i>Logout</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button><a href="#" class="w3-bar-item w3-button w3-right">Welcome: <?php echo $_SESSION['username']?></a>
  <!-- <div class="w3-container">
    <h1>Naindra Raj Phago</h1>
  </div> -->
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html> 
