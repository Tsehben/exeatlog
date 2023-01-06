<?php
//fetch.php
session_start();

$connect = mysqli_connect("localhost","localhost","Ektseh@2002","login") or die ("Unable to connect");
$subdomain =$_SESSION['subdomain'];

$query = "SELECT * FROM housemasters WHERE school='$subdomain'";
$result = mysqli_query($connect, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>