<?php
session_start();
include("connection.php");
 if(!isset($_SESSION['username']))
 {
	 header("location:Login.php");
 }
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM messages WHERE ID=$id";
	 $conn->query($sql);
	 header("location:message.php?mes=Message Deleted");
 }
 else
 {
	 header("location:message.php");
 }
 
?>