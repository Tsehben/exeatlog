<?php
									if(isset($_POST['deactivate'])){
												$subdomain =$_SESSION['subdomain'];
											$s ='security';
													$query ="UPDATE $subdomain$s SET status='notactive' WHERE status ='active' " ;
													$query_run =mysqli_query($conn3,$query);
													
			
											
											}	 
									
									$subdomain =$_SESSION['subdomain'];
											$s ='security';
										
											$query ="SELECT * FROM $subdomain$s WHERE status='active'";
									$query_run =mysqli_query($conn3,$query);
										if (mysqli_num_rows($query_run)>0){
											while ($row = mysqli_fetch_assoc($query_run)){
											
											
											echo $row["name"].'</br>';
											
											
												}
								
											}
										
									?>