
<html>
<head>
 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<script src="swal.js"></script>
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
		
			
			$date = $row["renew"];
			
	
	
		$_SESSION['subdomain']=$row["subdomain"] ;
		$_SESSION['username'] = $username;
		$_SESSION['pic'] =$row["logo"];
		$_SESSION['session'] =$row["session"];
$_SESSION['email'] =$row["email"];

			    
		
			    
			}	

	
header('location:admin/exeat-log.php');
	}
	
	

	
else
	{
		
		echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Invalid Credentials", "error");';
  echo '}, 1000);</script>'; 
	}
	
	
}

if(isset($_POST['forget'])  ){
	
	$username=$_POST['username'];
	
	$query="select *from register WHERE username='$username' ";

	$query_run = mysqli_query($conn4,$query);
	 if(mysqli_num_rows($query_run)>0)
	{
		
	while($row=mysqli_fetch_assoc($query_run))
	{
	
			$password =$row["password"];
			$username =$row['username'];
			$to = $row['email'];

$subject = "Password Request";
$txt = "Hello, ".$username."\n\nThis is your account's old password\n ".$password." \n\nThank you! ";
$headers = "Exeatlog" . "\r\n";

$sent =mail($to,$subject,$txt,$headers);
if($sent){
    
    echo '<div class="alert-success">The old password has been sent to your email. Check it out!</div>';
}
			
			
				 
			}
			
				
}	


}
	

	
	


?>










