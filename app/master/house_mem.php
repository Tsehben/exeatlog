<html>
<head>
  <script src="swal.js"></script>
  
  
</head>
</html>
	 
	 
<?php

	include('config1.php');
 
   
if(isset($_POST['submit_btn']) && isset($_POST['name']) && isset($_POST['form']) &&isset($_POST['number']) &&isset($_POST['track']) )
{ 
$name = $_POST['name'];
	$form = $_POST['form'];
	$house =$_SESSION['house'];
	$track =$_POST['track'];

   
	if(isset($_POST['number'])){
		$number = $_POST['number'];
	

	 	
	$subdomain =$_SESSION['subdomain'];
    
	$query= "SELECT *FROM `$subdomain$house` WHERE name='$name'";
		 
		 $query_run= mysqli_query($conn1,$query);
		 if(mysqli_num_rows($query_run)>0) {
			 // there is already auser with the same user name
			
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "Student already exists...Register another student", "info");';
  echo '}, 1000);</script>'; 	
		 }



				
        else{
		$query="SELECT* FROM `$subdomain$house`";
		$query_run =mysqli_query($conn1,$query);
			$counts =mysqli_num_rows($query_run);
			$count = $counts+1;
			$photo =null;
			$query ="insert into `$subdomain$house`(name,form,number,house,track,photo) VALUES('$name','$form','$number','$house','$track','$photo')";
			 $query_run = mysqli_query($conn1,$query);
			
			if($query_run){
				
			 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Student Registered!", "success");';
  echo '}, 1000);</script>'; 
		$_SESSION['name'] = $name;
		$_SESSION['form'] = $form;
			}
			else{
				echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to register student", "error");';
  echo '}, 1000);</script>'; 
			}
		}
	}
	
		}
				
 			
 if(isset($_POST['upload']) && isset($_POST['student'])){
	
    
	$house =$_SESSION['house'];
$subdomain =$_SESSION['subdomain'];
$id = $_POST['student'];

	$query= "SELECT *FROM `$subdomain$house` WHERE name='$id'";
		 
		 $query_run= mysqli_query($conn1,$query);
		 if(mysqli_num_rows($query_run)==0) {
			 // there is already auser with the same user name
			
echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> The student does not exist.
</div>';
		 }
		 else
		 
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
				
				
	
		$query ="UPDATE `$subdomain$house` SET  photo ='$image' WHERE name='$id' ";
		$query_run= mysqli_query($conn1,$query);
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
	 
 ?>
