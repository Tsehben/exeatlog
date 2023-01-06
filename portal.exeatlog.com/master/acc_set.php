<html>
<head>
  <script src="swal.js"></script>
  
  
</head>
<html>
<?php

include('config1.php');

if(isset($_POST['submit'])){
	
$subdomain =$_SESSION['subdomain'];
$cpassword=$_POST['cpassword'];	
$password =$_POST['password'];
$new_password = $_POST['new_password'];
$username=$_SESSION['username'];

if($new_password==$cpassword){
$query="SELECT *FROM housemasters where name='$username' AND password='$password' AND school='$subdomain'  ";
$query_run =mysqli_query($conn,$query);

if(mysqli_num_rows($query_run)>0){
$query="UPDATE housemasters SET password='$new_password' WHERE name='$username' AND school='$subdomain'";
$query_run=mysqli_query($conn,$query);

if($query_run){
	
 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Changes Saved", "success");';
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
  echo 'setTimeout(function () { swal("Sorry!", "New Password and Confirm Password do not match", "info");';
  echo '}, 1000);</script>'; 	
	
}

	
	

	
	
}

	if(isset($_POST['upload'])){
	
    

$subdomain =$_SESSION['subdomain'];
$id =$_SESSION['username'];
	$query= "SELECT *FROM housemasters WHERE name='$id' ";
		 
		 $query_run= mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)==0) {
			 // there is already auser with the same user name
			
echo 'The master does not exist';
		 }
		 else
		 
			 if(getimagesize($_FILES['image']['tmp_name']) == FALSE ){
			 
			 echo 'Please select an image';
			 }
			 else{
				 $image=addslashes($_FILES['image']['tmp_name']);
				 $name=addslashes($_FILES['image']['name']);
			     $image=file_get_contents($image);
			    $image=base64_encode($image);
				
				
	
		$query ="UPDATE housemasters SET  photo ='$image' WHERE name='$id' AND school='$subdomain' ";
		$query_run= mysqli_query($conn,$query);
		if ($query_run){
			echo 'Image Uploaded';
    
		}
		else{
				echo 'Unable to Upload Image';
		}
		
			 }
			 
	 

}



?>
