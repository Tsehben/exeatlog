<?php
include('config1.php');
	if(isset($_POST['delete']) && isset($_POST['name'])){
		
		$subdomain =$_SESSION['subdomain'];
		
		$name = $_POST['name'];
		foreach ( $name as $names){
		$s ='security';
		
		$query="DELETE FROM $subdomain$s WHERE name='$names'";
		$query_run =mysqli_query($conn3,$query);
		
		if ($query_run){
			
			echo '<b>Changes Saved</b>';
		}
		else{
			echo '<b>Enable to save changes</b>';
		}
		}
		
	}
	?>