<?php
//update.php
session_start();

$connect = mysqli_connect("localhost", "root", "", "boarders");
$subdomain =$_SESSION['subdomain'];
$house =$_SESSION['house'];

$query = "
 UPDATE $subdomain$house SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE id = '".$_POST["pk"]."'";
mysqli_query($connect, $query);
?>
