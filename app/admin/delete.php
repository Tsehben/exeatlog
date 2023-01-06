<?php
include('config1.php');
	if(isset($_POST['delete']) && isset($_POST['name'])){
		
		
		
		$name = $_POST['name'];
		foreach ( $name as $names){
		    $subdomain =$_SESSION['subdomain'];
		$s ='security';
		
		$query="DELETE FROM $subdomain$s WHERE name='$names'";
		$query_run =mysqli_query($conn3,$query);
		}
		if ($query_run){
			
			echo '<b>Changes Saved</b>';
		}
		else{
			echo '<b>Unable to save changes</b>';
		}
		
		
	}
	?>