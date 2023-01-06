<html>
<head>
  <script src="swal.js"></script>
  
  
</head>
<html>

<?php
include('config1.php');

//session_start();
include './vendor/autoload.php';
use Twilio\Rest\Client; 
if(isset($_POST['submit']) && isset($_POST['type']) && isset($_POST['reason']) && isset($_POST['students']) && isset($_POST['period']) && isset($_POST['destination'])){

$username =$_SESSION['username'];
$subdomain = $_SESSION['subdomain'];
$name=$_POST['students'];
$house =$_SESSION['house'];
$reason =$_POST['reason'];
$issuedate = gmdate("l F jS, Y - g:ia",time());
$session =$_SESSION['session'];
$period =$_POST['period'];
$return =gmdate("l F jS, Y - g:ia",time()+(3600*$period));
$destination = $_POST['destination'];
$code = mt_rand(100000,999999);
$sql="SELECT*  FROM `$subdomain$house` WHERE name ='$name'";
					
					$sql_run=mysqli_query($conn1,$sql);
						if(mysqli_num_rows($sql_run)>0){
						while($row =mysqli_fetch_assoc($sql_run)){
					        $form =$row["form"];
						    $photo =$row["photo"];
						    $number =$row["number"];
						    if($photo == null  ){
						    echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry, unable to issue!", "Please ensure that the student\'s photo is set.", "info");';
  echo '}, 1000);</script>'; 	
						    }
						    elseif($number == null OR strlen($number) < 13 OR strlen($number)  >13 ){
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry, unable to issue!", "Please ensure that the student\'s Parent\'s number  is set.", "info");';
  echo '}, 1000);</script>'; 	
						        
						        
						    }
						    else{
$sq="SELECT * FROM housemasters WHERE school='$subdomain' AND house ='$house' AND name ='$username'";
					
					$sq_run=mysqli_query($conn,$sq);
						if(mysqli_num_rows($sq_run)>0){
						while($row =mysqli_fetch_assoc($sq_run)){
					        $phone =$row["phone"];
					        
 
 if($_POST['type'] =='normal'){
     $type ='Internal Normal';
$query = "SELECT * FROM $subdomain where name='$name'AND session ='$session' AND form='$form' AND status='valid' ";
 $result = mysqli_query($conn2,$query);
 $sqli="SELECT * FROM register WHERE subdomain='$subdomain' ";
					
					$sqli_run=mysqli_query($conn4,$sqli);
						if(mysqli_num_rows($sqli_run)>0){
						while($row =mysqli_fetch_assoc($sqli_run)){
					        $limit =$row["maxexeat"];
					        if($limit== 0){
					            echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry, unable to issue!", "Please ensure that the limit of exeat is set.", "info");';
  echo '}, 1000);</script>'; 	
					        }
					         
 else
 
 if(mysqli_num_rows($result) >= $limit){
 
						
 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "This student is not allowed to take anymore exeats.", "info");';
  echo '}, 1000);</script>'; 	 
 }
 
else{
	$query="SELECT* FROM $subdomain";
	$query_run =mysqli_query($conn2,$query);
				
	  
$status ='valid';
$stat ='pending';
$by =$_SESSION['username'];
$timetag=' hour(s)';
$query ="INSERT INTO $subdomain(name,form,house ,reason,issuedate,period,code,destination,type,status,arrival,stat,author,session)  values ('$name', '$form','$house' , '$reason','$issuedate','$period$timetag','$code','$destination','$type','$status','$return','$stat','$by','$session')"; 
$query_run =mysqli_query($conn2,$query);




$_SESSION['type'] =$type;
$_SESSION['students']= $name;
$_SESSION['reason']= $reason ;
$_SESSION['issuedate']=$issuedate ;
$_SESSION['period']=$period;
$_SESSION['code'] =$code;
$_SESSION['destination'] =$destination;

// Your Account SID and Auth Token from twilio.com/console
// $account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
// $auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
 //$auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// $message="Dear Parent,your ward," .$name. " has been granted exeat (".$code. ") on ".$issuedate."\nReason: ".$reason."\nDestination : ".$destination."\nThis exeat is valid for ".$period." hour(s) \nFor more enquiries call: ".$phone."" ;

// $query = "SELECT * FROM `$subdomain$house` where name='$name' AND form='$form'";
//  $result = mysqli_query($conn1,$query);
//  $rows = mysqli_num_rows($result);
//  if (!$result) die ("Database access failed: " . mysqli_error());
//  for ($j = 0 ; $j < $rows ; ++$j)
//  {
//  $row = mysqli_fetch_row($result);
//   $number=$row[3] ;
  
//  }
// // A Twilio number you own with SMS capabilities
// $twilio_number = "+18649009868";

// $client = new Client($account_sid, $auth_token);
// $sent =$client->messages->create(


//     // Where to send a text message (your cell phone?)
//     $number,
//     array(
	
//         'from' => $twilio_number,
//         'body' => $message 
// 		)
// );




if (2>1){
// Your Account SID and Auth Token from twilio.com/console
// $account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
// $auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
//$message= $name. " of ".$house. " house has been granted exeat (".$code. ") on ".$issuedate."\nThis exeat is valid for ".$period."hour(s)" ;

// $s ='security';
// $query = "SELECT * FROM $subdomain$s WHERE status='active'";
//  $result = mysqli_query($conn3,$query);
//  $rows = mysqli_num_rows($result);
//  if (!$result) die ("Database access failed: " . mysqli_error());
//  for ($j = 0 ; $j < $rows ; ++$j)
//  {
//  $row = mysqli_fetch_row($result);
// $number1=$row[2];
 
// // A Twilio number you own with SMS capabilities
// $twilio_number = "+18649009868";


// $client = new Client($account_sid, $auth_token);
// $sent =$client->messages->create(


//     // Where to send a text message (your cell phone?)
//     array($number1),
//     array(
	
//         'from' => $twilio_number,
//         'body' => $message 
		 
// 		)
// );

if ($query_run) {
    
    
					
				$query="SELECT *FROM register WHERE subdomain ='$subdomain'";
					
					$query_run=mysqli_query($conn4,$query);
					
					if(mysqli_num_rows($query_run)>0){
					    while($row =mysqli_fetch_assoc($query_run)){
					        $_SESSION['address'] =$row["address"];
					        $_SESSION['schoolname'] =$row["name"];
					         $_SESSION['logo'] =$row["logo"];
					         $_SESSION['email'] =$row["email"];
					         $query="SELECT * FROM `$subdomain$house` WHERE name ='$name'";
					
					$query_run=mysqli_query($conn1,$query);
						if(mysqli_num_rows($query_run)>0){
						while($row =mysqli_fetch_assoc($query_run)){
					        $_SESSION['photo'] =$row["photo"];
					        
						    
						}
					    }
					}
					
					
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "The exeat has been issued!", "success");';
  echo '}, 1000);</script>'; 
		
	
}
		
	
}

else{
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to issue exeat", "error");';
  echo '}, 1000);</script>'; 
				



    }
     
 //}
}


}

}

}
}
elseif($_POST['type'] =='special'){
    
 
	$query="SELECT* FROM $subdomain";
	$query_run =mysqli_query($conn2,$query);
				
	  
   $type ='Internal Special';
   $status ='valid';
   $stat ='pending';
  $timetag=' hour(s)';
$by =$_SESSION['username'];
$query ="INSERT INTO $subdomain(name,form,house ,reason,issuedate,period,code,destination,type,status,arrival,stat,author,session)  values ('$name', '$form','$house' , '$reason','$issuedate','$period$timetag','$code','$destination','$type','$status','$return','$stat','$by','$session')"; 
$query_run =mysqli_query($conn2,$query);




$_SESSION['type'] =$type;
$_SESSION['students']= $name;
$_SESSION['reason']= $reason ;
$_SESSION['issuedate']=$issuedate ;
$_SESSION['period']=$period;
$_SESSION['code'] =$code;
$_SESSION['destination'] =$destination;
if($query_run){
// // Your Account SID and Auth Token from twilio.com/console
// $account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
// $auth_token = '026550ef0a74affd9300533391e23c1f';
// // In production, these should be environment variables. E.g.:
//  //$auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// $message="Dear Parent,your ward," .$name. " has been granted exeat (".$code. ") on ".$issuedate."\nReason: ".$reason."\nDestination : ".$destination."\nThis exeat is valid for ".$period." hour(s)\nFor more enquiries call: ".$phone."" ;


// $query = "SELECT * FROM `$subdomain$house` where name='$name' AND form='$form'";
//  $result = mysqli_query($conn1,$query);
//  $rows = mysqli_num_rows($result);
//  if (!$result) die ("Database access failed: " . mysqli_error());
//  for ($j = 0 ; $j < $rows ; ++$j)
//  {
//  $row = mysqli_fetch_row($result);
//   $number=$row[3] ;
  
//  }
// // A Twilio number you own with SMS capabilities
// $twilio_number = "+18649009868";

// $client = new Client($account_sid, $auth_token);
// $sent =$client->messages->create(


//     // Where to send a text message (your cell phone?)
//     $number,
//     array(
	
//         'from' => $twilio_number,
//         'body' => $message 
// 		)
// );




if (3>2){
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
$auth_token = '026550ef0a74affd9300533391e23c1f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// $message= $name. " of ".$house. " house has been granted exeat (".$code. ") on ".$issuedate."\nThis exeat is valid for ".$period." hour(s)" ;

// $s ='security';
// $query = "SELECT * FROM $subdomain$s WHERE status='active'";
//  $result = mysqli_query($conn3,$query);
//  $rows = mysqli_num_rows($result);
//  if (!$result) die ("Database access failed: " . mysqli_error());
//  for ($j = 0 ; $j < $rows ; ++$j)
//  {
//  $row = mysqli_fetch_row($result);
// $number1=$row[2];
 
// // A Twilio number you own with SMS capabilities
// $twilio_number = "+18649009868";


// $client = new Client($account_sid, $auth_token);
// $sent =$client->messages->create(


//     // Where to send a text message (your cell phone?)
//     array($number1),
//     array(
	
//         'from' => $twilio_number,
//         'body' => $message 
		 
// 		)
// );

if ($query_run) {
					$query="SELECT *FROM register WHERE subdomain ='$subdomain'";
					
					$query_run=mysqli_query($conn4,$query);
					
					if(mysqli_num_rows($query_run)>0){
					    while($row =mysqli_fetch_assoc($query_run)){
					        $_SESSION['address'] =$row["address"];
					        $_SESSION['schoolname'] =$row["name"];
					         $_SESSION['logo'] =$row["logo"];
					         $_SESSION['email'] =$row["email"];
					         $query="SELECT * FROM `$subdomain$house` WHERE name ='$name'";
					
					$query_run=mysqli_query($conn1,$query);
						if(mysqli_num_rows($query_run)>0){
						while($row =mysqli_fetch_assoc($query_run)){
					        $_SESSION['photo'] =$row["photo"];
					        
						    
						}
					    }
					}
					
					
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "The exeat has been issued!", "success");';
  echo '}, 1000);</script>'; 
		
	
}
    
}

else{
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to issue exeat", "error");';
  echo '}, 1000);</script>'; 
				



    }
     
 //}
}


    

}
}
}
}
}
						    
						}}}

?>