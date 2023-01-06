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


$subdomain = $_SESSION['subdomain'];
$name=$_POST['students'];
$house =$_SESSION['house'];
$reason =$_POST['reason'];
$issuedate = gmdate("l F jS, Y - g:ia",time());
$session =$_SESSION['session'];
$period =$_POST['period'];
$return =gmdate("l F jS, Y - g:ia",time()+(86400*$period));
$destination = $_POST['destination'];
$code=(time()/50)*300;

$timetag =' day(s)';
						    
$sql="SELECT*  FROM `$subdomain$house` WHERE name ='$name'";
					
					$sql_run=mysqli_query($conn1,$sql);
						if(mysqli_num_rows($sql_run)>0){
						while($row =mysqli_fetch_assoc($sql_run)){
					        $form =$row["form"];
					        $photo =$row["photo"];
					        $number =$row["number"];
					        if($photo == null){
					             echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry, unable to issue!", "Please ensure that Student\'s photo is set.", "info");';
  echo '}, 1000);</script>'; 	
					        }
					          else if($number == null OR strlen($number)<13  OR strlen($number)  >13 ){
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry, unable to issue!", "Please ensure that the student\'s Parent\'s number  is set.", "info");';
  echo '}, 1000);</script>'; 	
						        
						        
						    }
					        else{
 
 if($_POST['type'] =='normal'){
     $type ='External Normal';
$query = "SELECT * FROM $subdomain where name='$name' AND session='$session' AND form='$form' AND status='valid' ";
 $result = mysqli_query($conn2,$query);
 $sqli="SELECT * FROM register WHERE subdomain='$subdomain' ";
					
					$sqli_run=mysqli_query($conn4,$sqli);
						if(mysqli_num_rows($sqli_run)>0){
						while($row =mysqli_fetch_assoc($sqli_run)){
					        $limit = 100;
                  //$row["maxexeat"];
					        if($limit== 0){
					            echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry, unable to send!", "Please ensure that the limit of exeat is set.", "info");';
  echo '}, 1000);</script>'; 	
					        }
 elseif(mysqli_num_rows($result)>= $limit){
 
						
 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "This student is not allowed to take anymore exeats.", "info");';
  echo '}, 1000);</script>'; 	 
 }
 
else{
	$query="SELECT* FROM $subdomain";
	$query_run =mysqli_query($conn2,$query);
				
	 
$status ='request';
$by = $_SESSION['username'];
$issuedate= null; 
$code= null;

$arrival= null;
$stat= null;

$query ="INSERT INTO $subdomain(name,form,house,reason,issuedate,period,code,destination,type,status,arrival,stat,author,session)  values ('$name', '$form','$house', '$reason','$issuedate','$period$timetag','$code','$destination','$type','$status','$arrival','$stat','$by','$session')"; 
$query_run =mysqli_query($conn2,$query);







if ($query_run) {
    // Your Account SID and Auth Token from twilio.com/console
// $account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
// $auth_token = '026550ef0a74affd9300533391e23c1f';
// // In production, these should be environment variables. E.g.:
//  //$auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// $message="Hello Admin! \n\n You have an exeat request from " .$by. " to approve for ".$name. "  Log into your dashboard at app.exeatlog.com  \n\nThank you." ;


// $query = "SELECT * FROM register where subdomain='$subdomain' ";
//  $result = mysqli_query($conn4,$query);
//  $rows = mysqli_num_rows($result);
//  if (!$result) die ("Database access failed: " . mysqli_error());
//  for ($j = 0 ; $j < $rows ; ++$j)
//  {
//  $row = mysqli_fetch_row($result);
//   $number=$row[14] ;
  
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

    
					
			
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "The exeat request has been sent !", "success");';
  echo '}, 1000);</script>'; 
		
	
}
		
	



else{
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to send request", "error");';
  echo '}, 1000);</script>'; 
				



    }
}
}
 }
}








elseif($_POST['type'] =='special'){
  //session_start();
 
	$query="SELECT* FROM $subdomain";
	$query_run =mysqli_query($conn2,$query);
				
	  
   $type ='External Special';
   $status ='request';
$by = $_SESSION['username'];
$issuedate= null; 
$code= null;

$arrival= null;
$stat= null;
$query ="INSERT INTO $subdomain(name,form,house,reason,issuedate,period,code,destination,type,status,arrival,stat,author,session)  values ('$name', '$form','$house', '$reason','$issuedate','$period$timetag','$code','$destination','$type','$status','$arrival','$stat','$by','$session')"; 
$query_run =mysqli_query($conn2,$query);







if ($query_run) {
				
// 					    // Your Account SID and Auth Token from twilio.com/console
// $account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
// $auth_token = '026550ef0a74affd9300533391e23c1f';
// // In production, these should be environment variables. E.g.:
//  //$auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// $message="Hello Admin! \n\n You have an exeat request from " .$by. " to approve for ".$name. "  Log into your dashboard at app.exeatlog.com  \n\nThank you." ;


// $query = "SELECT * FROM register where subdomain='$subdomain' ";
//  $result = mysqli_query($conn4,$query);
//  $rows = mysqli_num_rows($result);
//  if (!$result) die ("Database access failed: " . mysqli_error());
//  for ($j = 0 ; $j < $rows ; ++$j)
//  {
//  $row = mysqli_fetch_row($result);
//   $number=$row[14] ;
  
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
					
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Request has been sent!", "success");';
  echo '}, 1000);</script>'; 
		
	
}
   
else{
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to send request", "error");';
  echo '}, 1000);</script>'; 
				



    } 
}




    




}}}
}
?>