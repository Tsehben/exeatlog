

<?php
require ('config1.php');
session_start();
if(isset($_POST['submit_btn']))
{
	$subdomain =$_SESSSION['subdomain'];
	$s='security';
	//echo '<script type="text/javascript"> alert("Sign Up button Clicked") </script>';

    $name = $_POST['name'];
	$number =	$_POST['number'];
	
			
		$query= "select *from $subdomain$s WHERE name='$name'";
		 
		 $query_run= mysqli_query($conn,$query);
		 if(mysqli_num_rows($query_run)>0) {
			 // there is already auser with the same user name
			
			 echo '<script type="text/javascript"> alert("Security Personnel already registered.. try another user name") </script>';
		 }




        else{
				 			  
			 $query ="insert into $subdomain$s VALUES ('$name','$number')";
			 $query_run = mysqli_query($conn,$query);
	
		}
		
 if($query_run)
				 {
			 echo '<script type="text/javascript"> alert("Security Personnel Added.. ") </script>';
				 }
				 			
				else{
					echo '<script type="text/javascript"> alert("Error.. ") </script>';

					}

	
	}		    
				
					 				
				 
				 
       
		
		 


    
	

     
?>
