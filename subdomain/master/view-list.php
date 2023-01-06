<html>
<head>
  <script src="swal.js"></script>
  
  
</head>
<html>

<?php
session_start();
include './vendor/autoload.php';
use Twilio\Rest\Client; 
if(isset($_POST['submit']) && isset($_POST['type']) && isset($_POST['reason']) && isset($_POST['students']) && isset($_POST['period']) && isset($_POST['destination'])){

include('config1.php');

$subdomain = $_SESSION['subdomain'];
$name=$_POST['students'];
$house =$_SESSION['house'];
$reason =$_POST['reason'];
$issuedate = gmdate("l F jS, Y - g:ia",time());
$period =$_POST['period'];
$destination = $_POST['destination'];
$code=(time()/50)*300;
$form =$_SESSION['form'];
 
 if($_POST['type'] =='normal'){
$query = "SELECT * FROM $subdomain where name='$name' AND form='$form'";
 $result = mysqli_query($conn2,$query);
 
 if(mysqli_num_rows($result)== 3){
 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "This student is not allowed to take anymore exeats.", "info");';
  echo '}, 1000);</script>'; 	 
 }
 
else{
	$query="SELECT* FROM $subdomain";
	$query_run =mysqli_query($conn2,$query);
				
	$count =mysqli_num_rows($query_run);
	$id =$count+1;	  

$query ="INSERT INTO $subdomain  values ('$id','$name', '$form','$house' , '$reason','$issuedate','$period','$code','$destination')"; 
$query_run =mysqli_query($conn2,$query);





$_SESSION['students']= $name;
$_SESSION['reason']= $reason ;
$_SESSION['issuedate']=$issuedate ;
$_SESSION['period']=$period;
$_SESSION['code'] =$code;
$_SESSION['destination'] =$destination;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
$auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
 //$auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
$message="Dear Parent,your ward," .$name. " has been granted exeat (".$code. ") on ".$issuedate."\nReason: ".$reason." \n Destination : ".$destination."\nThis exeat is valid for ".$period." days" ;


$query = "SELECT * FROM $subdomain$house where name='$name' AND form='$form'";
 $result = mysqli_query($conn1,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
  $number=$row[3] ;
  
 }
// A Twilio number you own with SMS capabilities
$twilio_number = "+18649009868";

$client = new Client($account_sid, $auth_token);
$sent =$client->messages->create(


    // Where to send a text message (your cell phone?)
    $number,
    array(
	
        'from' => $twilio_number,
        'body' => $message 
		)
);




if ($sent ->sid){
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
$auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
$message= $name. " of ".$house. " house has been granted exeat (".$code. ") on ".$issuedate."\nThis exeat is valid for ".$period." days" ;

$s ='security';
$query = "SELECT * FROM $subdomain$s";
 $result = mysqli_query($conn3,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
$number1=$row[2];
 
// A Twilio number you own with SMS capabilities
$twilio_number = "+18649009868";


$client = new Client($account_sid, $auth_token);
$sent =$client->messages->create(


    // Where to send a text message (your cell phone?)
    array($number1),
    array(
	
        'from' => $twilio_number,
        'body' => $message 
		 
		)
);

if ($query_run) {
					
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "The exeat has been issued!", "success");';
  echo '}, 1000);</script>'; 
		
	
}

else{
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to issue exeat", "error");';
  echo '}, 1000);</script>'; 
				



    }
     
 }
}

elseif($_POST['type'] == 'special'){

	$query="SELECT* FROM $subdomain";
	$query_run =mysqli_query($conn2,$query);
				
	$count =mysqli_num_rows($query_run);
	$id =$count+1;	  

$query ="INSERT INTO $subdomain  values ('$id','$name', '$form','$house' , '$reason','$issuedate','$period','$code','$destination')"; 
$query_run =mysqli_query($conn2,$query);
$house= $_SESSION['house'];
$form = $_POST['form'];





$_SESSION['students']= $name;
$_SESSION['reason']= $reason ;
$_SESSION['issuedate']=$issuedate ;
$_SESSION['period']=$period;
$_SESSION['code'] =$code;
$_SESSION['destination'] =$destination;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
$auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
$message="Dear Parent,your ward," .$name. " has been granted exeat (".$code. ") on ".$issuedate."\nReason: ".$reason." \n Destination : ".$destination."\nThis exeat is valid for ".$period." days" ;


$query = "SELECT * FROM $subdomain$house where name='$name' AND form='$form'";
 $result = mysqli_query($conn1,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
  $number=$row[3] ;
  
 }
// A Twilio number you own with SMS capabilities
$twilio_number = "+18649009868";

$client = new Client($account_sid, $auth_token);
$sent =$client->messages->create(


    // Where to send a text message (your cell phone?)
    $number,
    array(
	
        'from' => $twilio_number,
        'body' => $message 
		)
);




if ($sent ->sid){
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
$auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
$message= $name. " of ".$house. " house has been granted exeat (".$code. ") on ".$issuedate."\nThis exeat is valid for ".$period." days" ;

$s ='security';
$query = "SELECT * FROM $subdomain$s WHERE status ='active'";
 $result = mysqli_query($conn3,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
$number1=$row[2];
 
// A Twilio number you own with SMS capabilities
$twilio_number = "+18649009868";


$client = new Client($account_sid, $auth_token);
$sent =$client->messages->create(


    // Where to send a text message (your cell phone?)
    array($number1),
    array(
	
        'from' => $twilio_number,
        'body' => $message 
		 
		)
);

if ($query_run) {
	
	 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "The exeat has been issued!", "success");';
  echo '}, 1000);</script>'; 
		
	
}

else{
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to issue exeat.", "error");';
  echo '}, 1000);</script>'; 


    }
     
 
}



}
}
}

 }
}
?>