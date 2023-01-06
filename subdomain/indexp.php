

<html>
<head>
 <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

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
		$_SESSION['username'] =$_POST['username'];
		
	while($row=mysqli_fetch_assoc($query_run))
	{
		$_SESSION['pic'] =$row["photo"];
			$_SESSION['subdomain']=$row["school"] ;
	$_SESSION['email'] = $row["email"];
		$_SESSION['house']=$row["house"] ;
		$subdomain =$row["school"];
		$query="select *from register WHERE subdomain='$subdomain'";

	$query_run = mysqli_query($conn4,$query);
	 if(mysqli_num_rows($query_run)>0)
	{
		
	while($row=mysqli_fetch_assoc($query_run))
	{
		
		
		$renew = $row["renew"];
		
   
}	

	header('location:master/exeat-log.php');

	}
	else{
		
		echo 'Invalid Credentials';
	}
			
}	

	

	}
		
else{
	echo  '<script type="text/javascript"> alert("Invalid Credentials") </script>';
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
		
		
		
			$_SESSION['email']=$row["email"] ;
			
				 header('location:forgot.php');
				
			}
			
}	


}

?>
</html>