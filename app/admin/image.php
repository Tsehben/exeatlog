<?php
include ('config1.php');
if(isset($_POST['searchIt']) && $_POST['search']){
	$subdomain=$_SESSION['subdomain'];
	$house =$_SESSION['house'];

	$search=mysqli_real_escape_string($conn,$_POST['search']);



		$results=mysqli_query($conn,"SELECT* FROM housemasters WHERE school='$subdomain'AND name LIKE '%$search%' OR  house LIKE '%$search%'  ");
			
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
	$results=mysqli_query($conn,"SELECT* FROM housemasters WHERE school='$subdomain' ORDER BY name ASC");
			
		$queryResult= mysqli_num_rows($results);
	
		if ($queryResult>0){
			while($row= mysqli_fetch_assoc($results)){
	echo '<option>'.$row["name"].'</option>';
		
		}}
	
}

?>