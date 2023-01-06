
<?php 

$house= $_SESSION['house'];
$form = $_POST['form'];


$query="SELECT* FROM $house WHERE form='$form'";
if($result=mysqli_query($conn1,$query)){
	while($row=mysqli_fetch_row($result))
	{
		echo '<option>'.$row[0].'</option>';
		
	}	
}
?>
</select>



</br>
	<input class="submit"id="submit_btn" name="submit_btn" type="submit" value="View List of House Members"/></br></br></br>
<label class="students">Where To?</label></br>
</br>	<input  name="destination" type="text" placeholder="Enter the destination"/>
	
	</div>
<div class="text_side">
<label class="students">Type Of Exeat</label>
<a href="masters_page.php" class="type"><input  name="" type="radio" checked="checked" />Normal</a>
<a href="special_exeat.php" class="type"><input  name="" type="radio" />Special</a>
<label >Enter the reason for issuing the exeat:</label></br>
<textarea rows="15" cols="38" name="reason" class='text_box' required/>

</textarea>


	<input class="submit"id="submit_btn" name="submit" type="submit" value="Issue Exeat"/></a>



<label class="period" >Longitivity of exeat</label></br>
	<span class="period"><input class="time_box" name="period" type="text" /> days</span>



</form>	

</div>



<?php
include './vendor/autoload.php';
use Twilio\Rest\Client; 
if(isset($_POST['submit'])){

$name=$_POST['students'];
$house =$_SESSION['house'];
$reason =$_POST['reason'];
$issuedate = gmdate("l F jS, Y - g:ia",time());
$period =$_POST['period'];
$destination = $_POST['destination'];
$code=(time()/50)*300;

$query = "SELECT * FROM $house where name='$name'";
 $result = mysqli_query($conn1,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
  $form=$row[1] ;
  
 }
$query = "SELECT * FROM exeats where name='$name' AND form='$form'";
 $result = mysqli_query($conn1,$query);
 
 if(mysqli_num_rows($result)== 3){
	 echo '<script type="text/javascript"> alert("This student is not allowed to take anymore exeats... ") </script>';
	 
 }
 
else{

$query ="INSERT INTO exeats  values ('$name', '$form','$house' , '$reason','$issuedate','$period','$code','$destination')"; 
$query_run =mysqli_query($conn1,$query);
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


$query = "SELECT * FROM $house where name='$name' AND form='$form'";
 $result = mysqli_query($conn1,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
  $number=$row[2] ;
  
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


$query = "SELECT * FROM security_active";
 $result = mysqli_query($conn,$query);
 $rows = mysqli_num_rows($result);
 if (!$result) die ("Database access failed: " . mysqli_error());
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 $row = mysqli_fetch_row($result);
$number1=$row[1];
 
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

if ($sent ->sid && $query_run) {
	
	echo '<script type="text/javascript"> alert("The exeat has been issued.. ") </script>';
		
	
}

else{
	echo '<script type="text/javascript"> alert("The exeat was unable to be issued...Ensure that all fields are filled appropriately") </script>';



    }
     
 }
}

else{
	echo '<script type="text/javascript"> alert("The exeat was unable to be issued...Ensure that all fields are filled appropriately") </script>';


}




echo "<div class='msg1'>Dear Parent,your ward, ".$name." has been granted exeat (".$code. ") on ".$issuedate."</br>Reason: ".$reason."</br> Destination : ".$destination."</br>This exeat is valid for".$period."days</div>";
echo "<div class='msg2'>".$name. " has been granted exeat(".$code. ") on ".$issuedate."</br></div>";
}
}



?>
<a href="printexeat.php"> <img src="print.png" class="print_btn" width="100" height="100"/></a>
</div>
<?php


if(isset($_POST['logout']))
	
	{
		session_unset();
		session_destroy();
		header('location:index.php');
	}

	
	?>
	<footer>
	<p>Copyright©2018 ExeatLog 1.0 All Rights Reserved</p>
	<p id="credit">Powered by JabenSoft®</p>
	</footer>
	
	
	</ul>
	
	
	
	
    
    
	
	
</div> 


	
</body>
	
	
   
</html> 