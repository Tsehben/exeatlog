<html>
<head>
  <script src="swal.js"></script>
  
</head>
<html>

<?php
require ('config1.php');
if(isset($_POST['submit_btn']))
{
	$subdomain =$_SESSION['subdomain'];
	$s='security';
	//echo '<script type="text/javascript"> alert("Sign Up button Clicked") </script>';

    $name = $_POST['name'];
	$number =	$_POST['number'];
	$status ='notactive';
			
		$query= "select *from $subdomain$s WHERE name='$name'";
		 
		 $query_run= mysqli_query($conn3,$query);
		 if(mysqli_num_rows($query_run)>0) {
			 // there is already auser with the same user name
			

	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "Security Personnel Already Registered", "info");';
  echo '}, 1000);</script>'; 
				
		 }




        else{
				 					$query="SELECT* FROM $subdomain$s";
								$query_run =mysqli_query($conn3,$query);
				
								$count =mysqli_num_rows($query_run);
									$id =$count+1;	  
			 $query ="insert into $subdomain$s VALUES ('$id','$name','$number','$status')";
			 $query_run = mysqli_query($conn3,$query);
	
	if($query_run) {
			 				
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Security Personnel Added", "success");';
  echo '}, 1000);</script>'; 
				 }
		
		else{
					echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to Add Security Personnel", "error");';
  echo '}, 1000);</script>'; 
				
					}
		}
		
 
				 			
				

	
	}		    
				
			?>