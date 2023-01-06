<html>
<head>
  <script src="swal.js"></script>
  
  
</head>
<html>
	 
	 
<?php
     session_start();
	 
	include('config1.php');
 
   
if(isset($_POST['submit_btn']))
{ 
$name = $_POST['name'];
	$form = $_POST['form'];
	$house =$_SESSION['house'];
	$track =$_POST['track'];

   
	if(isset($_POST['number'])){
		$number = $_POST['number'];
	

	 	
	$subdomain =$_SESSION['subdomain'];
    
	$query= "SELECT *FROM `$subdomain$house` WHERE name='$name' AND form ='$form' AND track='$track'";
		 
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
			
			$query ="INSERT INTO  `$subdomain$house` ()VALUES('$count','$name','$form','$number','$house','$track')";
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
				
 
				
if(isset($_POST['upload'])){
	
    
	$house =$_SESSION['house'];
$subdomain =$_SESSION['subdomain'];
$id =$_SESSION['name'];
$form = $_SESSION['form'];
	$query= "SELECT *FROM $subdomain$house WHERE name='$id' AND form ='$form'";
		 
		 $query_run= mysqli_query($conn1,$query);
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
				
				
	
		$query ="UPDATE $subdomain$house SET  photo ='$image' WHERE name='$id' AND form='$form'  ";
		$query_run= mysqli_query($conn1,$query);
		if ($query_run){
			echo "image uploaded";
		}
		else{
			echo 'Error';
		echo $id;
		echo $form;
		}
		
			 }
			 
	 

}
	
	
         	 
 ?>
