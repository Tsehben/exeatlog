<html>
<head>
  <script src="swal.js"></script>
  
  
</head>
<html>
<?php
require ('config1.php');


if(isset($_POST['submit_btn'])){
	
	

    $username = $_POST['name'];
	$password =	$_POST['password'];
	$cpassword =$_POST['cpassword'];
	if(isset($_POST['email'])){
	$email = $_POST['email'];
	}
	$subdomain =$_SESSION['subdomain'];		
		

	
$query= "select *from housemasters WHERE name='$username' AND school='$subdomain'";
		 
		 $query_run= mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)>0) {
			 
			
			 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "House Already Registered", "info");';
  echo '}, 1000);</script>'; 
		 }




        else{
				
if ($password == $cpassword){
				if(isset($_POST['house'])){
		$house= $_POST['house'];
			$subdomain =$_SESSION['subdomain'];	
				$query="SELECT* FROM housemasters WHERE school ='$subdomain'";
				$query_run =mysqli_query($conn,$query);
				
				$count =mysqli_num_rows($query_run);
				$id =$count+1;
			 $query1 ="insert into housemasters(id,name,password,house,email,school)  VALUES ('$id','$username','$password','$house','$email','$subdomain')";
			 $query1_run = mysqli_query($conn,$query1);
	
				
		
 if($query_run)
				 {
$_SESSION['name'] = $username;
		$_SESSION['house'] = $house;
		
$query= "CREATE TABLE $subdomain$house(
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
	
	if(isset($_POST['upload'])){
	
    
	$house =$_SESSION['house'];
$subdomain =$_SESSION['subdomain'];
$id =$_SESSION['name'];
$form = $_SESSION['house'];
	$query= "SELECT *FROM housemasters WHERE name='$id' AND house='$house'";
		 
		 $query_run= mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)==0) {
			 // there is already auser with the same user name
			
echo 'The student does not exist';
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
				
				
	
		$query ="UPDATE housemasters SET  photo ='$image' WHERE name='$id' AND house='$house' AND school='$subdomain' ";
		$query_run= mysqli_query($conn,$query);
		if ($query_run){
			echo'<div class="alert alert-warning alert-success-style3 alert-st-bg2">
                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
										<span class="icon-sc-cl" aria-hidden="true">×</span>
									</button>
                                <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
                                <p><strong>Warning!</strong> A warning that might need attention.</p>
                            </div>';
		}
		else{
			echo 'Error';
		echo $id;
		echo $house;
		}
		
			 }
			 
	 

}
		
?>	
		
		
		
		
		