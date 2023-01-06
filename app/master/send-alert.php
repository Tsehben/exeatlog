<?php
session_start();
include('config1.php');

include './vendor/autoload.php';
use Twilio\Rest\Client; 
$subdomain =$_SESSION['subdomain'];
$house =$_SESSION['house'];
$msg =$_POST['msg'];
$form = $_POST['form'];
echo $subdomain;
echo $house;
$students =$_POST['students'];
if(isset($_POST['submit']) && $_POST['form'] =='Entire House' &&isset($_POST['msg'])){
	
	// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
$auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]



$query = "SELECT * FROM $subdomain$house";
 $result = mysqli_query($conn1,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
$numbers =$row[3];
 
// A Twilio number you own with SMS capabilities
$twilio_number = "+18649009868";


$client = new Client($account_sid, $auth_token);
$sent =$client->messages->create(


    // Where to send a text message (your cell phone?)
    array($numbers),
    array(
	
        'from' => $twilio_number,
        'body' => $message 
		 
		)
);
	if($sent){
	    
	    echo 'Alert sent';
	}
}
}
elseif(isset($_POST['submit']) && $_POST['form'] !=='Entire House' &&isset($_POST['msg'])){
	
	// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
$auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]



$query = "SELECT * FROM $subdomain$house WHERE form ='$form'";
 $result = mysqli_query($conn1,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
$numbers =$row[3];
 
// A Twilio number you own with SMS capabilities
$twilio_number = "+18649009868";


$client = new Client($account_sid, $auth_token);
$sent =$client->messages->create(


    // Where to send a text message (your cell phone?)
    array($numbers),
    array(
	
        'from' => $twilio_number,
        'body' => $message 
		 
		)
);
	
}	
	
}


?>