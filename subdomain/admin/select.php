<?php
session_start();
								  include('config1.php');
								  $subdomain =$_SESSION['subdomain'];
								  $query ="SELECT * FROM housemasters WHERE school='$subdomain'";
							$query_run =mysqli_query($conn,$query);
	
							if(mysqli_num_rows($query_run)>0){
							while($row =mysqli_fetch_assoc($query_run)){
							echo '<option>'.$row["house"].'</option>';
							}
							}
								?>