<?php
//fetch.php
session_start();

$connect = mysqli_connect("localhost", "root", "", "boarders");
$subdomain =$_SESSION['subdomain'];
$house =$_SESSION['house'];
$query = "SELECT name,form,track,number FROM  `$subdomain$house` ORDER BY name ASC" ;
$result = mysqli_query($connect, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>