<?php		 				
				 
				 
       
		
		 
if(isset($_POST['submit'])&& isset($_POST['name'])){
												$subdomain =$_SESSION['subdomain'];

												
									    foreach ($_POST['name'] as $names){
								
											$s='security';
										
												$query ="UPDATE $subdomain$s SET status ='active' WHERE name='$names'";
												$query_run = mysqli_query($conn3,$query);
										
												
												
												}
												if ($query_run){
													echo 'Success';
													
												}
												else{
													echo 'Error';
													
												
												}
												
											
											}
											

    
	

     
?>
