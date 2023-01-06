<?php

include('config1.php');
$subdomain=$_SESSION['subdomain'];
	$house =$_SESSION['house'];
if(isset($_POST['searchIt'])){
	

	$search=mysqli_real_escape_string($conn1,$_POST['search']);



		$results=mysqli_query($conn1,"SELECT* FROM `$subdomain$house` WHERE name LIKE '%$search%' OR  form LIKE '%$search%'");
			
		$queryResult= mysqli_num_rows($results);
	
		if ($queryResult>0){
			while($row= mysqli_fetch_assoc($results)){
	echo '<option>'.$row["name"].'</option>';
	
			}
				
			}
			
			else{
				echo "No Search Results!";
				
			}
	}

else {
	$results=mysqli_query($conn1,"SELECT* FROM `$subdomain$house` ORDER BY name ASC");
			
		$queryResult= mysqli_num_rows($results);
	
		if ($queryResult>0){
			while($row= mysqli_fetch_assoc($results)){
	echo '<option>'.$row["name"].'</option>';
	
			}
				
			}
	
}

?>