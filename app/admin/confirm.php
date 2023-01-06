<html>
<head></head>
<body>
<form method="POST">
<?php
include './vendor/autoload.php';
use Twilio\Rest\Client;

include ('config1.php');

$subdomain =$_SESSION['subdomain'];

     
   
$query="SELECT* FROM $subdomain WHERE status='request'";
$result=mysqli_query($conn2,$query);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
	{
		$string = $row["name"];
 
//Get the first character.
$firstCharacter = $string[0];
		echo
		'<tr>
		                                        <td ><input type="checkbox" value="'.$row["name"].'" name="name[]"/></td>
                                                <td style="width:50px;"><span class="round">'.$firstCharacter.'</span></td>
                                                <td>
												
                                                    <h4>'.$row["name"].'</h4><small class="text-muted">'.$row["form"].'</small></td>
                                                <td>'.$row["reason"].'</br><small class="text-muted">'.$row["type"].' exeat</small></td>
                                                <td class="text-muted"> <i class="fa fa-map-marker"></i>'.$row["destination"].' <span style="margin-left:40px;">('.$row["house"].' <small class="text-muted"> house </small>)</span></br>'.$row["period"].' day(s) <i class="fa fa-clock-o"></i> <small class="text-muted"> <span style="margin-left:25px;">Requested by:'.$row["author"].'</small></span></td>
                                            </tr>';
	}
	echo '<button  type="submit" style="float:right;" class="btn btn-success" name="submit">Approve</button><button type="submit" style="float:right; margin-right:20px;" class="btn btn-danger" name="no">Dissapprove</button>';
}


 
 if(isset($_POST['submit'])&& isset($_POST['name'])){
     
     $subdomain =$_SESSION['subdomain'];
$issuedate = gmdate("l F jS, Y - g:ia",time());
foreach ($_POST['name'] as $names){

		$sql="SELECT * FROM $subdomain WHERE name='$names' AND status='request'";
		$sql_run=mysqli_query($conn2,$sql);
		if(mysqli_num_rows($sql_run)>0){
						while($row =mysqli_fetch_assoc($sql_run)){
					        $by =$row["author"];
					    $house = $row["house"];
		
		$sql="SELECT * FROM housemasters WHERE school='$subdomain' AND name='$by'";
		$sql_run=mysqli_query($conn,$sql);
						if(mysqli_num_rows($sql_run)>0){
						while($row =mysqli_fetch_assoc($sql_run)){
					        $phone =$row["phone"];
					        
									    								
												$sql="SELECT * FROM `$subdomain$house` WHERE name='$names'";
					
					        $sql_run=mysqli_query($conn1,$sql);
						if(mysqli_num_rows($sql_run)>0){
						while($row =mysqli_fetch_assoc($sql_run)){
					        $phone1 =$row["number"];
										$sql="SELECT * FROM $subdomain WHERE name='$names' AND status ='request' AND house='$house'";
					
					$sql_run=mysqli_query($conn2,$sql);
						if(mysqli_num_rows($sql_run)>0){
						while($row =mysqli_fetch_assoc($sql_run)){
					        $reason =$row["reason"];
					        $destination =$row["destination"];
					        $period=$row["period"];
					        
										// Your Account SID and Auth Token from twilio.com/console
// $account_sid = 'AC59160a752009e2a440a54fa5af2cba7c';
// $auth_token = '026550ef0a74affd9300533391e23c1f';
// // In production, these should be environment variables. E.g.:
//  //$auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
// $message="Dear Parent,your ward," .$names. " is being granted exeat\nReason: ".$reason."\nDestination : ".$destination."\nThis exeat is valid for ".$period." days\nTo disapprove call: ".$phone." within the next 24 hours" ;
// // A Twilio number you own with SMS capabilities
// $twilio_number = "+18649009868";

// $client = new Client($account_sid, $auth_token);
// $sent =$client->messages->create(


//     // Where to send a text message (your cell phone?)
//     $phone1,
//     array(
	
//         'from' => $twilio_number,
//         'body' => $message 
// 		)
// );
if (3>1){
												$query ="UPDATE $subdomain SET status ='approved', issuedate ='$issuedate' WHERE name='$names' AND status='request'";
												$query_run = mysqli_query($conn2,$query);
										
												
													if ($query_run){
													echo 'Success';
													
												}
												else{
													echo 'Error!';
												
												}
}
						}}
												}}
						}
						}}
											
												
											
											}
										
}}

	
											if(isset($_POST['no'])&& isset($_POST['name']) ){
											    
											     
                                                
											     foreach ($_POST['name'] as $names){
											    $query ="UPDATE $subdomain SET status ='disapproved' WHERE name='$names' AND status='request' ";
												$query_run = mysqli_query($conn2,$query);
											     
												
												
											    
											}
											 	if ($query_run){
													echo '</br><b>Success</b>';
													
												}
												else{
													echo '</br><b>Error!</b>';
												
												}   
											}
 ?>
</form>
<body>
</html>

