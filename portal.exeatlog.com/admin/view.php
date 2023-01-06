<?php
 session_start();
 include('config1.php');

if(isset($_POST['view'])){
	$subdomain=$_SESSION['subdomain'];
	$house =$_POST['house'];
	$form= $_POST['form'];
	$query ="SELECT * FROM `$subdomain$house` WHERE form ='$form' ORDER BY name ASC";
	$query_run =mysqli_query($conn1,$query);
	
if(mysqli_num_rows($query_run)>0){
$_SESSION['house']= $house ;
	$_SESSION['form'] =$form;
	while($row =mysqli_fetch_assoc($query_run)){
		
		echo '<option>'.$row["name"].'</option>';
	}
	}

} 

//not really working for now.
if(isset($_POST['searchIt'])){
	$subdomain=$_SESSION['subdomain'];
	$house =$_POST['house'];

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
	
	?>