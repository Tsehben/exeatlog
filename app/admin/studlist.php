<?php

include('config1.php');
$subdomain=$_SESSION['subdomain'];
	$house =$_POST['house'];
if(isset($_POST['view'])){
	$_SESSION['house'] = $house; 
	$results=mysqli_query($conn1,"SELECT* FROM `$subdomain$house` ORDER BY name ASC");
			
		$queryResult= mysqli_num_rows($results);
	
		if ($queryResult>0){
			while($row= mysqli_fetch_assoc($results)){
	echo '<option>'.$row["name"].'</option>';
	
			}
				
			}
	
}

?>