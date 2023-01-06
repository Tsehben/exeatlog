<?php
//update.php
session_start();

$connect = mysqli_connect("localhost", "root", "", "register");
$subdomain =$_SESSION['subdomain'];


$query = "
 UPDATE register SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE subdomain = '".$_POST["pk"]."'";
mysqli_query($connect, $query);
?>
