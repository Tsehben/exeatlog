<html>
<head>
  <script src="swal.js"></script>

</head>
<html>

<?php
$conn= mysqli_connect("localhost","root","","test");
if(isset($_POST['user'])&& isset($_POST['cpassword'])&& isset($_POST['npassword'])&& isset($_POST['email'])){
$username = $_POST['user'];
$npassword = $_POST['npassword'];
$cpassword = $_POST['cpassword'];
$email =$_POST['email'];
if(isset($_POST['signup'])){
	
if($cpassword == $npassword){
$query ="SELECT * FROM user WHERE username='$username' OR email='$email'";
$query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)>0){
	 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "User Already Registered", "info");';
  echo '}, 1000);</script>'; 
	
}
else{
	$query="INSERT INTO user(username,email,password) VALUES('$username','$email','$npassword')";
	$query_run = mysqli_query($conn,$query);
	if($query_run){
						
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "User Added!", "success");';
  echo '}, 1000);</script>'; 
  echo '<a href="login.php">Proceed To Login</a>' ;
		
	}
	else{
		echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to add User...", "error");';
  echo '}, 1000);</script>'; 
				
	}
}

			}

else{
	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Passwords do nnot match...", "error");';
  echo '}, 1000);</script>'; 
				
	
}			
}
}
?>