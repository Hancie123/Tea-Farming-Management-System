<style>
ul li a:hover{

    background-color:#6c5ce7;
    border-radius: 2px 2px 2px 2px;

}


</style>


<!-- Navigation Bar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="index.php">
<img src="Naindra.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-circle"> 
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav me-auto">
<li class="nav-item">
<a class="nav-link active " href="index.php"><i class="bi bi-house-fill"></i>Home</a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="contactmessage.php"><i class="bi bi-person-lines-fill"></i>Contact</a>
</li>
<li class="nav-item">
<a class="nav-link text-light" href="chat/index.php"><i class="bi bi-chat-fill"></i>NH Chat</a>
</li>  
<li class="nav-item">
<a class="nav-link text-light" href="#"><i class="bi bi-file-earmark-person-fill"></i>About</a>
</li>  
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Link</a></li>
<li><a class="dropdown-item" href="#">Another link</a></li>
<li><a class="dropdown-item" href="#">A third link</a></li>
</ul>
</li>
</ul>
<form class="d-flex" action="Login.php">
<input class="btn btn-primary" type="submit" href="Login.php" value="Login In" >
</form>
</div>
</div>
</nav>