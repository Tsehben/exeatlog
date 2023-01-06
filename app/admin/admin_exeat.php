<html>
<head>
<?php
session_start();

require('config1.php');
?>



<style>
body{

margin-top:0px;	
margin-left:20%;
	}
	#page{
		width :80%;
		
	}
	
	 

	li{
	float : left;
	
	}
	
	#navmenu{
                    text-decoration:none;	
	display:block;
	color:white;

     font-family:Calibri,Gothic,Comic Sans;             
	}
    
#navmenu:hover{
background-color:#111;
color:blue;
font-family:Calibri,Comic Sans,Arial Black;
 font-size:20px;
}

}
	
	label{
	color:black;
	font-family:Verenda,Tahoma,Arial;
	font-size:12px;
	}
	
	

	 p{
	font-size:15px;
	font-family:Verenda,Tahoma,Calibri;
	text-decoration: none;
	}

	footer {
	left : 0px;
	bottom : 0px;
	height:10%;
	width : 100% ;
	background-color:#111;
	text-align : center ;
	color : white ;
 	background : #207cca;
    
	}
	
	
	#navmenu.active{
	background-color:#207cca;
	
	}
	
}
a:hover {
	text-decoration:none;
}
a:active {
	text-decoration: none;
}

.logout{
	margin-right:100px;
	float:right;
	font-size:16px;
	color:white;
	font-family:Calibri,Geneva,Tahoma;
	}
	.logout1{
		background-color:#207cca;
		display:absolute;
	}
#Main_wrapper{
background : #ffffff;
margin:1px auto;
margin-bottom:0px;
width : 80%;
height:750px;
border-radius : 0px;
padding : 10px 20px;
line-height : 50x;
clip :auto;
}
ul{
	list-style-type : none;
	overflow : hidden;
	margin : 0px auto;
	padding : 0px;
	background : rgb(13,182,238);
  
    
    margin-top : 0px ;


	}


 li{
float : left;

 
 }
 
 a {
	display : block;
	
    font-size : 18px;
    font-family : Tahoma,geneva,elephant;
	text-decoration : none;

   }
   
   .active {
	   background : #207cca;
	   
	   
	   
   }
   
    
.set_buton, .set_button, .rtab, .tab:hover{
background : #111;
color:white;

 
}

  .tab{
float : left ;
	  
	  
  } 
   
  .rtab{
padding:10px 16px;

	  
	  
  } 
  label {
line-height: 25px;
	   }
   .set_buton{
	  background:blue;
   color:white;
float:left;
padding:10px 16px;	
   }

.set_button{
padding:10px 16px;	 
font-size:25.5px;

   color:white;
     background : #207cca;
   }
   


.selectarea{
width:50%;	
float:left;
}
.text_side{
	
}
   .period{
	   float:right;
   }
   
   
   label{
	   font-family:Andalus, AngsanaUPC, "Arabic Typesetting";
   }
   h2{
	  font-family: Georgia, "Times New Roman", Times, serif;
   }
   select{
	  font-family : Tahoma,geneva,elephant;
	   }
	   .submit{
		 	background : #207cca;
	color : white;
	
	margin-top : 4px;
	
	font-size : 18px;
   font-family : Tahoma,geneva,elephant;  
		 }
		 .time_box{
			 width:30px;
			 
		 }
		 .tmark{
			 font-size:50px;
			    font-family :   Andalus, AngsanaUPC, "Arabic Typesetting";  
		 }
		 .header{
			 font-family: Tahoma,geneva,elephant;  
			 font-size:20px;
			 }
			 
			 .msg1{
				 float:left;
				 width:50%;    	
border-bottom: 2px solid #207cca;
	border-top: 2px solid #207cca;
	clip: auto;
	   font-family:Verenda,Tahoma,Calibri;				 
			 }
			 
			 .msg2{
				 		 float:right;
				 width:45%;
				margin-top : 20px;
				border-bottom: 2px solid #207cca;
	border-top: 2px solid #207cca;
	clip: auto;
	   font-family:Verenda,Tahoma,Calibri;	
			 }
			 .type{
	display : block;
	
    font-size : 16px;
    font-family : Tahoma,geneva,elephant;
	text-decoration : none;			 
				 
			 }
			 .students{
				 height:200px;
				 width:200px;
			 }
			 .set_buton:hover{
background : #111;
color:white;
			 }
			 .set_button:hover{
background : #111;
color:white;
			 }
			 .sub{
				 position : auto;
				 background : #207cca;
	color : white;
	float : right;
font-size : 16px;
margin-top : 10px;
			 }
			 
			 .dropdown .dropbtn{
				 font-size:16px;
				 border:none;
				 outline:none;
				 color:white;
				 padding:10px 16px;
				 background-color:inherit;
				 font-family:Tahoma,geneva,elephant;
				 margin:0;
			 }
			 .content{
				 display:none;
				 position:absolute;
				 background-color:#207cca;
                  min-width:160px;
				  box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
				  z-index:1;
				 
				 }
				 .content a{
				font-size:16px;
				float:none;
					 color:black;
					 padding :10px 14px;
					 text-decoration:none;
					 display:block;
					 text-align:left;
				background-color:#ffffff;
				}
				.content a:hover{
					 
				background-color:#207cca;
				}
				
			 .dropdown:hover .content{
				 display:block;
background-color:#333;				 
			 }
			 .dropbtn:hover{
			 background-color:#333;	
			 }			 
			 .dropbtn{					 

  
			 }
			 .set{
				bottom : 5px;
				margin-left : 8px;
				margin-top : 10px;
				font-size : 25px;
			
			 }
			 .print_btn{
				 float:right;
				 
				 
			 }
			 .drops{
				 margin: 10px;
				 font-size : 18px;
				 
			 }
			 .text_box{
				 
				 font-family:Times New Roman,Elephant, Cambria;
			 }
   </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<title><?php echo $_SESSION['username'].' Page ';?></title>
	<body>
	<div id="page">
	<ul>
<span class="tmark"><img src="tmark.png" width="300" height="90"></span>	 

   <form class="logout" action="http://presec.exeatlog.com" method="post">
	 Welcome, <?php echo $_SESSION['username']."<img src='master_pic.png' class='set' width='50' height='50' />";?>
	</br>
	</br>
	<input type="submit" name="logout"  class="logout1"value="Log Out">
	</form>
</br>
</br>
</br>
</br>
<li><a href="admin_page.php" class="set_button">Exeat Log</a><li>
<li>

<div class="dropdown"><button class="dropbtn"><img src="settings.png" width="25" height="25"><span class='set'>Settings</span>
<i class= "fa fa-caret-down"></i>
</button>
<div class="content">
<a href="admin_set.php"><img src="mem.png" width="20" height="20"><label class='drops'>Manage Houses</label></a>
<a href= "acc_set.php"><img src="master_pic.png" width="20" height="20"><label class='drops'>My Account</label></a>
<a href= "security.php"><img src="master_pic.png" width="20" height="20"><label class='drops'>Manage Security</label></a>
</div>
</div>
</li>
</br>
</br>
</br>	
<div id="Main_wrapper">
<a href= "admin_page.php">View Exeat Log</a>
<center><p class="header">Fill out the following for to issue exeat:</p></center>
<form action="admin_exeat.php" method="post">
<div class="selectarea">
<select name="form" class ="form"><option>form 1</option><option>form 2</option><option>form 3</option></select>
</br>
<select id="house" name="house">
<?php

$query="SELECT* FROM housemasters ";
if($result=mysqli_query($conn,$query)){
	while($row=mysqli_fetch_row($result))
	{
		echo '<option>'.$row[2].'</option>';
$row[2]=$house;		
	}	
}
?>

</select>
<label class="students">Grant exeat To:</label></br>
<select multiple="2" name="students" class ="students" >

<?php 

$house= $_POST['house'];
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

<label >Enter the reason for issuing the exeat:</label></br>
<textarea rows="18" cols="38" name="reason" class='text_box' required/>

</textarea>


	<input class="submit"id="submit_btn" name="submit" type="submit" value="Issue Exeat"/></a>



<label class="period" >Longitivity of exeat</label></br>
	<span class="period"><input class="time_box" name="period" type="text" /> days</span></br>



</form>	

</div>



<?php
include './vendor/autoload.php';
use Twilio\Rest\Client;  

if(isset($_POST['submit'])){

$name=$_POST['students'];
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

	


$query ="INSERT INTO exeats  values ('$name', '$form','$house' , '$reason','$issuedate','$period','$code','$destination')"; 
$query_run =mysqli_query($conn1,$query);

$_SESSION['students']= $name;
$_SESSION['reason']= $reason ;
$_SESSION['issuedate']=$issuedate ;
$_SESSION['period']=$period;
$_SESSION['code'] =$code;
$_SESSION['destination'] =$destination;
$_SESSION['house']=$house;




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

echo "<div class='msg1'>Dear Parent,your ward, ".$name." has been granted exeat (".$code. ") on ".$issuedate."</br>Reason: ".$reason."</br> Destination : ".$destination."</br>This exeat is valid for".$period."days </br></div>";
echo "<div class='msg2'>".$name. " of ".$house." house has been granted exeat(".$code. ") on ".$issuedate."</br></div>";
   
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