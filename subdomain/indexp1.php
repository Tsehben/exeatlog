
<html>
<head>
 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

 </head>
 </html>
<?php
session_start();

require 'config/config.php';    
if(isset($_POST['login']) && isset($_POST['username']) &&isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
    

		
	
	$query="select *from register WHERE username='$username' AND password='$password'";

	$query_run = mysqli_query($conn4,$query);
	 if(mysqli_num_rows($query_run)>0)
	{
		
	while($row=mysqli_fetch_assoc($query_run))
	{
		
		
		$renew = $row["endrenew"];
		$today = mktime();
		if ($today > $renew){
			
			header('location:renew.php');
		}
		else{
			$_SESSION['subdomain']=$row["subdomain"] ;
		
       header('location:admin/exeat-log.php');
		}	
}	

	

	}
	
	

	
else
	{
		
		//invalid
		echo '<div class=" alert-success">Hey</div>';
	}
	
	
}

if(isset($_POST['forget'])  ){
	
	$username=$_POST['username'];
	
	$query="select *from register WHERE username='$username' ";

	$query_run = mysqli_query($conn3,$query);
	 if(mysqli_num_rows($query_run)>0)
	{
		
	while($row=mysqli_fetch_assoc($query_run))
	{
		
		
		
			$_SESSION['email']=$row["email"] ;
			
				 
			}
			header('location:forgot.php');
				
}	


}
	

	
	


?>










