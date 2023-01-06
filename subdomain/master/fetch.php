<?php
//fetch.php
session_start();

$connect = mysqli_connect("localhost", "root", "", "boarders");
$subdomain =$_SESSION['subdomain'];
$house =$_SESSION['house'];
$query = "SELECT * FROM `$subdomain$house`";
$result = mysqli_query($connect, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>