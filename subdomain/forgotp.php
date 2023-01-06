<?php
include ('config/config.php');
session_start();
$code= '1234';

if(isset($_POST['change']) && isset($_POST['password']) &&isset($_POST['cpassword']) && $_POST['code'] ==$code){
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];

$username = $_SESSION['username'];
echo $username;
if($cpassword == $password){
	
	$query ="UPDATE housemasters SET password='$password' WHERE name ='$username' ";
	$query_run =mysqli_query($conn,$query);
	
	if ($query_run){
		echo 'Success';
		
	}
	else{
		echo 'error';
	
	}
	
}
}
?>