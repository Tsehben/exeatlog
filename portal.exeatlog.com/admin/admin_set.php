<html>
<head>
  <script src="swal.js"></script>
  <style>
  .alert{
      top: 0px;
      right:0px;
    
      
  }
  </style>
  
</head>
<html>
<?php
require ('config1.php');


if(isset($_POST['submit_btn'])){
	
	

    $username = $_POST['name'];
	$password =	$_POST['password'];
	$cpassword =$_POST['cpassword'];
		$phone =$_POST['phone'];
	if(isset($_POST['email'])){
	$email = $_POST['email'];
	}
	$subdomain =$_SESSION['subdomain'];		
		

	
$query= "select *from housemasters WHERE name='$username'";
		 
		 $query_run= mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)>0) {
			 
			
			 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "House Already Registered", "info");';
  echo '}, 1000);</script>'; 
		 }




        else{
				
if ($password == $cpassword){
				if(isset($_POST['house'])){
		$house= mysqli_real_escape_string($conn,$_POST['house']);
			$subdomain =$_SESSION['subdomain'];	
				$query="SELECT* FROM housemasters WHERE school ='$subdomain'";
				$query_run =mysqli_query($conn,$query);
				
				$count =mysqli_num_rows($query_run);
				$id =$count+1;
				$photo= null;
			 $query1  ="INSERT INTO housemasters(name,password,house,email,school,phone,photo)  VALUES ('$username','$password','$house','$email','$subdomain','$phone','$photo')";
			 $query1_run = mysqli_query($conn,$query1);
	
	
				
		
 if($query1_run)
				 {

$query= "CREATE TABLE `$subdomain$house` (
 id INT AUTO_INCREMENT,
 name VARCHAR(300) NOT NULL,
 form VARCHAR(32) NOT NULL,
 number VARCHAR(20) NOT NULL,
 house VARCHAR(50) NOT NULL,
 track VARCHAR(50) NOT NULL,
 photo LONGBLOB NOT NULL,
 PRIMARY KEY (id)
 )";
				 
	$query_run= mysqli_query($conn1,$query);		
				 
				
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "The house has been registered!", "success");';
  echo '}, 1000);</script>'; 
				 }
				 else{
					echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "House was unable to register", "error");';
  echo '}, 1000);</script>'; 
				

					}
				 }
							 			
				

}
else {
	
	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "Passwords do not match ", "info");';
  echo '}, 1000);</script>'; 
				
}
	
		}

	

				
					 				
}
	
	
	if(isset($_POST['upload']) && isset($_POST['master'])){
	
    

$subdomain =$_SESSION['subdomain'];
$id =$_POST['master'];
	$query= "SELECT *FROM housemasters WHERE name='$id' AND school ='$subdomain' ";
		 
		 $query_run= mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)==0) {
			 // there is already auser with the same user name
			
	echo '<div class="alert alert-info alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Sorry!</strong> Master does not Exist.
</div>';
		 }
		 
		 
			if(getimagesize($_FILES['image']['tmp_name']) == FALSE ){
			 
			 echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Please select an image.
</div>';
			 }
			 else 
				 if($_FILES['image']['size'] > 800000){
				 
				  echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Image is too large.Please make sure your image is less than 800KB. 
</div>';
			 }
			 else{
				 $image=addslashes($_FILES['image']['tmp_name']);
				 $name=addslashes($_FILES['image']['name']);
			     $image=file_get_contents($image);
			    $image=base64_encode($image);
				
				
	
		$query ="UPDATE housemasters SET  photo ='$image' WHERE name='$id' AND school='$subdomain' ";
		$query_run= mysqli_query($conn,$query);
		if ($query_run){
			echo '<div class="alert alert-success alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Image Uploaded.
</div>';
		}
		else{
			echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Unable to Upload Image.
</div>';
		
		}
		
			 }
			 
	 

}
	else{
		
	}	
?>	
		
		
		
		
		