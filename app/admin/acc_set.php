<html>
<head>
  <script src="swal.js"></script>
  
</head>
<html>

<?php
require 'config1.php';

?>

<?php
$username=$_SESSION['username'];
$subdomain =$_SESSION['subdomain'];

if(isset($_POST['submit'])){
$cpassword=$_POST['cpassword'];	
$password =$_POST['password'];
$new_password = $_POST['new_password'];
$username=$_SESSION['username'];
$subdomain =$_SESSION['subdomain'];
if($new_password==$cpassword){
$query="SELECT *FROM register where password='$password'";
$query_run =mysqli_query($conn4,$query);

if(mysqli_num_rows($query_run)>0){
$query="UPDATE register SET password='$new_password' WHERE username='$username' AND subdomain ='$subdomain'";
$query_run=mysqli_query($conn4,$query);

if($query_run){
	
	 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Changes saved", "success");';
  echo '}, 1000);</script>'; 
}
}
else{
					echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Invalid!", "The old password entered is incorrect", "error");';
  echo '}, 1000);</script>'; 
}




}


else{
	
	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "New Password and Confirm Password do not much", "info");';
  echo '}, 1000);</script>'; 
				
	
}

}

?>
