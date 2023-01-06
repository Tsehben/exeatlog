<html>
<head>
  
  <script src="swal.js"></script>
  
</head>
<html>
<?php

include('config1.php');
	
	if(isset($_POST['upload'])){
	
    

$subdomain =$_SESSION['subdomain'];
$id =$_SESSION['username'];
	$query= "SELECT *FROM register WHERE username='$id' AND subdomain='$subdomain' ";
		 
		 $query_run= mysqli_query($conn4,$query);
		 if(mysqli_num_rows($query_run)==0) {
			 // there is already auser with the same user name
			
echo 'Error';
		 }
		 else
		 
			 if(getimagesize($_FILES['image']['tmp_name']) == FALSE ){
			 
	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Attention!", "Please select an image!", "info");';
  echo '}, 1000);</script>'; 
		
			 }
			 else{
				 $image=addslashes($_FILES['image']['tmp_name']);
				 $name=addslashes($_FILES['image']['name']);
			     $image=file_get_contents($image);
			    $image=base64_encode($image);
				
				
	
		$query ="UPDATE register SET  logo ='$image' WHERE username='$id' AND subdomain='$subdomain' ";
		$query_run= mysqli_query($conn4,$query);
		if ($query_run){
			echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "School Logo Updated!", "success");';
  echo '}, 1000);</script>'; 
		}
		else{
			echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to update!", "erro");';
  echo '}, 1000);</script>'; 
		
		}
		
			 }
			 
	 

}
		

?>