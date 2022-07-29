<?php
$sernamename="localhost";
$username="root";
$password="";
$dbname="tea";

$conn=new mysqli($sernamename, $username, $password, $dbname);

if(!$conn){
    die ("Connection fail" .mysqli_error());

}


?>