<?php
//update.php
session_start();

$connect = mysqli_connect("localhost", "root", "", "register");
$subdomain =$_SESSION['subdomain'];


$query = "
 UPDATE register SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE name = '".$_POST["pk"]."' AND subdomain ='$subdomain'";
mysqli_query($connect, $query);
?>
