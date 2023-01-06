<html>
<head>
  
  <script src="swal.js"></script>
  
</head>
<html>

<?php

require ('config1.php');
session_start();

if(isset($_POST['submit'])){
		$name= mysqli_real_escape_string($conn, $_POST['name']);
		$username= 'Admin'.mt_rand(1,100);
	    $subdomain = $_POST['subdomain'];
	    $email= $_POST['email'];
		$number= $_POST['number'];
		$renew = gmdate("l F jS, Y - g:ia",time()+60);
		$status = 'free';
		$password = $subdomain.mt_rand(1000,9999);   
		
$query= "select *from register WHERE subdomain='$subdomain' AND name ='$name'";
		 
		 $query_run= mysqli_query($conn4,$query);
		 if(mysqli_num_rows($query_run)>0) {
			 // there is already auser with the same user name
			
			  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "The school is already registered", "info");';
  echo '});</script>'; 

		 }


else{

				
				
					$query="CREATE TABLE $subdomain(
 id INT AUTO_INCREMENT,
 name VARCHAR(300) NOT NULL,
 form VARCHAR(32) NOT NULL,
 house VARCHAR(20) NOT NULL,
 reason VARCHAR(500) NOT NULL,
 issuedate VARCHAR(100) NOT NULL,
 period INT(20) NOT NULL,
 code VARCHAR(10) NOT NULL,
 destination VARCHAR(100) NOT NULL,  
 primary key(id)
 )";	 
						$query_run =mysqli_query($conn2,$query); 
						
			if($query_run){
				$s='security';
				
					$query="CREATE TABLE $subdomain$s (
 id INT AUTO_INCREMENT,
 name VARCHAR(300) NOT NULL,
phone VARCHAR(32) NOT NULL,
status VARCHAR(32) NOT NULL,
 primary key(id)
 )";	 
						$query_run =mysqli_query($conn3,$query); 
				
					
				
				 
			if ($query_run){
				
			$query = " insert into  register values ('$name','$subdomain','$username','$password','$email','$number','$renew','$status')";
			
			$query_run = mysqli_query($conn4,$query);
			 
			 if($query_run){
				 
$subject = "Exeatlog Account Credentials ";
$txt = "Dear Customer,\n You have successfully joined the exeatlog network.\nYour one-month free trial period will expires on<b>".$renew."</b>\nUse the following credentials to access your Admin dashboard\nUsername : ".$username."\nPassword:".$password." Thank you! ";
$headers = "From: Exeatlog" . "\r\n";

$sent=mail($email,$subject,$txt,$headers);
		if($sent){		
	 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "School Registered", "success");';
  echo '});</script>'; 
		}
			}
			 
			 else{
				 echo 'Error';
			
			 }
			 }
			 else{
				 echo 'Error';
			
			 }
				} 
					
		
			
			 else{
				 echo 'Error';
			
			 }
	
}
	
	
}

?>