<html>
<head>
  
  <script src="swal.js"></script>
  
</head>
<html>

<?php

include ('config1.php');

session_start();

if(isset($_POST['submit'])){
    
    


		$name= mysqli_real_escape_string($conn4, $_POST['name']);
		$username= 'Admin'.mt_rand(1,100);
	    $subdomain = $_POST['subdomain'];
	    $email= $_POST['email'];
		$number= $_POST['number'];
		$renew = gmdate("l F jS, Y - g:ia",time()+2592000);
		$status = 'payhalf';
		$password = $subdomain.mt_rand(1000,9999);   
		$code =$_POST['code'];
$query= "select *from register WHERE subdomain='$subdomain' AND name ='$name'";
		 
		 $query_run= mysqli_query($conn4,$query);
		 if(mysqli_num_rows($query_run)>0) {
			 // there is already auser with the same user name
			
			  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Sorry!", "The school is already registered", "info");';
  echo '});</script>'; 

		 }
else{
    $query="SELECT *FROM code WHERE code ='$code' AND status='notused'";
    $query_run =mysqli_query($conn4,$query);
    
    if (mysqli_num_rows($query_run)>0){
        
       
    $query="UPDATE code SET school='$subdomain' AND status= 'used' WHERE code ='$code' AND status='notused'";
    $query_run =mysqli_query($conn4,$query);
       
       if($query_run){
		   $date = date();
           $query="UPDATE code SET renewdate='$date' and renewperiod ='30' WHERE school ='$sch' AND code='$code'";
    $query_run =mysqli_query($conn4,$query);
       
           
       }
        
			if($query_run){
					$query="CREATE TABLE $subdomain(
 id INT AUTO_INCREMENT,
 name VARCHAR(300) NOT NULL,
 form VARCHAR(32) NOT NULL,
 house VARCHAR(20) NOT NULL,
 reason VARCHAR(500) NOT NULL,
 issuedate VARCHAR(100) NOT NULL,
 period VARCHAR(20) NOT NULL,
 code VARCHAR(10) NOT NULL,
 destination VARCHAR(100) NOT NULL,  
 type VARCHAR(30) NOT NULL,
 status VARCHAR(30) NOT NULL,
 arrival VARCHAR(100) NOT NULL,
 stat VARCHAR(30) NOT NULL,
 author VARCHAR(200) NOT NULL,
 session VARCHAR(200) NOT NULL,
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
			    $logo = null;
			    $maxexeat = 0;
			    $session = null;
			    $maxperiodi = 0;
			    $maxperiode = 0;
			    $phone = null;
			
			$query = "INSERT INTO register(name, subdomain,username,password,email,address,renew,status,logo,maxexeat,session,maxperiodi,maxperiode,phone) VALUES ('$name','$subdomain','$username','$password','$email','$number','$renew','$status','$logo',$maxexeat,'$session',$maxperiodi,$maxperiode,'$phone')";
			
			$query_run = mysqli_query($conn4,$query);
			 
			 if($query_run){
			     $key =mt_rand(1000,9999);
			     
			     $rkey =substr($key,0,2);
	
$subject = "Exeatlog Account Credentials";

$txt = "Congratulations you have successfully joined the Exeatlog network \n Your one month trial discount period expires on ".$renew.".\n\n Join us in the Messenger Code Campaign and enjoy a subsequent 10% discount\n\n The first two digits of your code are: ".$rkey."XX \n\n 1. Recommend exeatlog to another school and share this code with them\n 2.Direct them to call the Exeatlog customer care service line on +233506959887 \n 3.You get a great deal of discount! \n\n Use the following Credentials to access your Admin Dashboard at https://exeatlog.com/app/  \n\n Username : ".$username."\r \n Password : ".$password."\r\n\n\nThank You ";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers = "From: Exeatlog" . "\r\n";

$sent = mail($email,$subject,$txt,$headers);

if ($query_run){
    $status ='notused';
    $query ="INSERT INTO code(code,school,status) VALUES('$key','$subdomain','$status')";
	 $query_run=mysqli_query($conn4,$query);
	 
	 if($query_run){
	 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "School Registered", "success");';
  echo '});</script>'; 
	 }
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
else{
         echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Invalid Code", "error");';
  echo '});</script>'; 
    }

    	
	
}
}
?>