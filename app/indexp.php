 

<html>
<head>
 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<script src="swal.js"></script>
 </head>
 </html>
 



<?php
require 'config/config.php';
if(isset($_POST['login1']) && isset($_POST['username']) &&isset($_POST['password'])){

   
  
	
$username=$_POST['username'];
	$password=$_POST['password'];
 
	
	
$query="select *from housemasters WHERE name='$username' AND password='$password'";

	$query_run = mysqli_query($conn,$query);
	 if(mysqli_num_rows($query_run)>0)
	{
		$_SESSION['username'] =$_POST["username"];
		
	while($row=mysqli_fetch_assoc($query_run))
	{
		$_SESSION['email'] =$row["email"];
			$_SESSION['subdomain']=$row["school"] ;
	$_SESSION['pic'] =$row["photo"];
		$_SESSION['house']=$row["house"] ;
		
		$subdomain =$row["school"];
		$query="select *from register WHERE subdomain='$subdomain'";

	$query_run = mysqli_query($conn4,$query);
	 if(mysqli_num_rows($query_run)>0)
	{
		
	while($row=mysqli_fetch_assoc($query_run))
	{
	$_SESSION['session'] =$row["session"];
			$date = $row["renew"];
	
}	

	

	}
	
		header('location:master/exeat-log.php');	
}	

	

	}
		
else{
	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Invalid Credentials", "error");';
  echo '}, 1000);</script>'; 
}

}

if(isset($_POST['forget1'])  ){
	
	$username=$_POST['username'];
	
	$query="select *from housemasters WHERE name='$username' ";

	$query_run = mysqli_query($conn,$query);
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
</html>