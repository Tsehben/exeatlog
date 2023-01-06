<?php
include ('config/config.php');
session_start();
$code= mt_rand(1,10000);
$to = $_SESSION['email'];
echo $_SESSION['email'];
$subject = "Account Verification";
$txt = "Hello,\n\nThis is your account verification code\n ".$code." \n Use this code to change your password.\n\nThank you.  ";
$headers = "Exeatlog" . "\r\n";

$sent =mail($to,$subject,$txt,$headers);
if($sent){
    
    echo"<div class='alert-success'>The verification code has been sent to your email. Check it out!</div>";
}
if(isset($_POST['code']) && isset($_POST['password']) &&isset($_POST['cpassword']) && $_POST['code'] ==$code){
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];
$username=$_SESSION['username'];
if($cpassword == $password){
	$query ="UPDATE housemasters SET password='$password' WHERE name ='$username' ";
	$query_run =mysqli_query($conn,$query);
	
	if ($query_run){
		
		echo 'Success';
	}
	else{
		$query ="UPDATE register SET password='$password' WHERE username ='$username' ";
	$query_run =mysqli_query($conn4,$query);
		
		if ($query_run){
		
		echo 'Success';
	}
	
	}
}	
}

?>