<?php
session_start();
include('config1.php');
include './vendor/autoload.php';
use Twilio\Rest\Client; 

if(isset($_POST['issue'])&& isset($_POST['name'])){
	   
$subdomain =$_SESSION['subdomain'];
	
$house =$_SESSION['house'];
$issuedate = gmdate("l F jS, Y - g:ia",time());
 

$code=mt_rand(100000,999999);

												
									   $names= $_POST['name'];
								$query="SELECT* FROM $subdomain WHERE status='approved' AND house='$house' AND name ='$names'";
$result=mysqli_query($conn2,$query);
    if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
	{
											$period =$row["period"];
											$reason =$row["reason"];
											$form  =$row["form"];
											$destination=$row["destination"];
			$arrival = gmdate("l F jS, Y - g:ia",time()+(86400*$period));	
		$s='security';
			$sql="SELECT * FROM $subdomain$s WHERE status='active'";
					
					$sql_run=mysqli_query($conn3,$sql);
						if(mysqli_num_rows($sql_run)>0){
						while($row =mysqli_fetch_assoc($sql_run)){
					        $phone =$row["phone"];
			
			// Your Account SID and Auth Token from twilio.com/console
// $account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
// $auth_token = '026550ef0a74affd9300533391e23c1f';
// // In production, these should be environment variables. E.g.:
//  //$auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// $message= $names. " of ".$house. " house has been granted exeat (".$code. ") on ".$issuedate."\nThis exeat is valid for ".$period ;
// // A Twilio number you own with SMS capabilities
// $twilio_number = "+18649009868";

// $client = new Client($account_sid, $auth_token);
// $sent =$client->messages->create(


//     // Where to send a text message (your cell phone?)
//     array($phone),
//     array(
	
//         'from' => $twilio_number,
//         'body' => $message 
// 		)
// );

			if (3>2){
			
		$by =$_SESSION['username'];
												$query ="UPDATE $subdomain SET status ='valid',stat ='pending',issuedate='$issuedate',code='$code',arrival ='$arrival', author='$by'  WHERE name='$names'";
												$query_run = mysqli_query($conn2,$query);
										
												
												
												
					
												if ($query_run){
												    $_SESSION['students']= $names;
$_SESSION['reason']= $reason ;
$_SESSION['issuedate']=$issuedate ;
$_SESSION['period']=$period;
$_SESSION['code'] =$code;
$_SESSION['destination'] =$destination;

$query="SELECT *FROM register WHERE subdomain ='$subdomain'";
					
					$query_run=mysqli_query($conn4,$query);
					
					if(mysqli_num_rows($query_run)>0){
					    while($row =mysqli_fetch_assoc($query_run)){
					        $_SESSION['address'] =$row["address"];
					        $_SESSION['schoolname'] =$row["name"];
					         $_SESSION['logo'] =$row["logo"];
					         $_SESSION['email'] =$row["email"];
					         $query="SELECT * FROM `$subdomain$house` WHERE name ='$names'";
					
					$query_run=mysqli_query($conn1,$query);
						if(mysqli_num_rows($query_run)>0){
						while($row =mysqli_fetch_assoc($query_run)){
					        $_SESSION['photo'] =$row["photo"];
					        
						    
						}
					    }
					}
					
													header('location:printexeat.php');
													
												}
												else{
													echo 'Error!';
												
												}
						}
    
    
    
}
	}									
		    
		    
	

}
}
}
	    
}

	if(isset($_POST['delete']) && isset($_POST['name'])){
		
		
		  $subdomain =$_SESSION['subdomain'];
		$name = $_POST['name'];
		foreach ( $name as $names){
		  
	 
		
		$query="DELETE FROM $subdomain WHERE name='$names' AND status='disapproved'";
		$query_run =mysqli_query($conn2,$query);
		}
		if ($query_run){
			
			echo 'Deleted';
		}
		else{
			echo '<b>Unable to delete</b>';
		}
		
		
	}
?>