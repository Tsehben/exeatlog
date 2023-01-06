<?php
//fetch.php
session_start();

$connect = mysqli_connect("localhost", "master", "exeatdb@2020", "boarders");
$subdomain =$_SESSION['subdomain'];
$house =$_SESSION['house'];
$query = "SELECT * FROM $subdomain$house WHERE form='Form 2'";
$result = mysqli_query($connect, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>