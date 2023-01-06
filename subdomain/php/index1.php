


   

<?php
if(isset($_POST['login']))
{
	session_start();
require 'config/config.php'; 
	$username=$_POST['username'];
	$password=$_POST['password'];
    

		
	
	$query="select *from user WHERE username='$username' AND password='$password'";

	$query_run = mysqli_query($conn,$query);
	 if(mysqli_num_rows($query_run)>0)
	{
		
		//valid
	
	
	$_SESSION['username']= $username;
	header('location:admin/admin_page.php');
	
	
	}
	
	

	
else
	{
		
		//invalid
		echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';
	}
	
	
}

?>









