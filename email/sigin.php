<html>
<head>
  <script src="swal.js"></script>

</head>
<html>

<?php
$conn= mysqli_connect("localhost","root","","test");
if(isset($_POST['user'])&& isset($_POST['password'])&& isset($_POST['user'])){
$username = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['user'];
if(isset($_POST['login'])){
$query ="SELECT * FROM user WHERE username='$username' AND password='$password' OR email='$email' AND password='$password'";
$query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)>0){
	header("location:http://sie.hbut.edu.cn");
	
}
else{
	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Invalid Credentials", "error");';
  echo '}, 1000);</script>'; 
}

			
}
}
?>