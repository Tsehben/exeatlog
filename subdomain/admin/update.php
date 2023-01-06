<?php
//update.php
session_start();

$connect = mysqli_connect("localhost", "root", "", "login");
$subdomain =$_SESSION['subdomain'];


$query = "
 UPDATE housemasters SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE id = '".$_POST["pk"]."' AND school ='$subdomain'";
mysqli_query($connect, $query);
?>
