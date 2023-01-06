<?php
//fetch.php
session_start();

$connect = mysqli_connect("localhost", "root", "", "register");
$subdomain =$_SESSION['subdomain'];

$query = "SELECT * FROM register WHERE subdomain='$subdomain'";
$result = mysqli_query($connect, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>