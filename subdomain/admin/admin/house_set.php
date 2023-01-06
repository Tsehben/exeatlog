<html>
<head>
<?php
require_once ('config.php');


?>
<style>
	body{
margin-top:0px;	
 margin-left:20%;
	margin-right;
	}
	#page{
		width :80%;
		
	}
	
	 ul{
	 list-style-type  : none;
	 display:block;
	background-color:#333;
	margin:0px;
	overflow : hidden ; 
    width:80%;  
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
	
#PageTop{
	height:90px;
	width:100%;
	
	}
	

	 p{
	font-size:15px;
	font-family:Verenda,Tahoma,Calibri;
	text-decoration: none;
	}
	
	 #PageRest{
     float :right ;
	width:100%;
	height:100%;
	}
	
	 #Form_side{

	}
	
	footer {
	left : 0px;
	bottom : 0px;
	height:10%;
	width : 80% ;
	background-color:#111;
	text-align : center ;
	color : white ;
    
	}
	
	
	#navmenu.active{
	background-color:#207cca;
	
	}
	.style1 {
	font-family: Andalus, AngsanaUPC, "Arabic Typesetting";
	color: #207cca;
}
.style7 {font-family: Georgia, "Times New Roman", Times, serif}
.style8 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
}
.style9 {font-family: Geneva, Arial, Helvetica, sans-serif}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
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
margin : 1px auto;
width : 80%;
border-radius : 0px;

padding : 10px 20px;
line-height : 50x;
}
ul{
	list-style-type : none;
	overflow : hidden;
	margin : 0px auto;
	padding : 0px;
	background : #333;
    display:block;
    
    margin-top : 0px ;


	}


 li{
float : left;

 
 }
 
 a {
	display : block;
	color : white;
    font-size : 18px;
    font-family : Tahoma,geneva,elephant;
	text-decoration : none;

   }
   
   .active {
	   background : #207cca;
	   padding:10px 16px;
	   
	   
   }
   
    
a:hover{
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

   color:white;
     background : #207cca;
   }


</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<title>Adminstrator </title>
	<body>
	<div id="page">
	<ul>
	<p>RecordAScore</p>
	 

</br>
<li><a class="set_buton" href="">League Table</a></li>
<li><a class="set_button" href="admin_set.php">Settings</a></li>
</br>
</br>
</br>
</br>
	<div id="Main_wrapper">
<ul>
<li><a class="active" href="admin_set.php">Manage Houses </a></li>
<li><a class="rtab" href="acc_set.php">My Account</a></li>
</ul>

<center><h2>Sign Up a Tutor Now!</h2></center>
<form action="teacher_list.php" method="post">
<label><b> Username:</b></label><br />
<input id="textbox" name="username" type="text" class="inputvalues" placeholder="Type tutor's fullname" required/><br>
 
</br>
<label><b> Password:</b></label><br />
<input id="textbox" name="password" type="password" class="inputvalues" /><br>
 
</br>

<label>Select tutor's class:</label>
<select id="dep"name="dep">
<option>arts</option>
<option>science</option>
<option>business</option>
</select><br />
<label><b> Subject:</b></label><br />
<select id="subject"name="subject">
<option>maths</option>
<option>eng</option>
<option>social</option>
</select>
</br>
<select id="class"name="class">
<option>1B2</option>
<option>1E</option>
<option>2a1</option>
<option>1a1</option>
</select>
</br>

<input id="submit_btn" name="submit_btn" type="submit" value="Sign Up Tutor"/>

</form>
</div>
<?php
if(isset($_POST['submit_btn']))
{
	
	//echo '<script type="text/javascript"> alert("Sign Up button Clicked") </script>';

    $username = $_POST['username'];
	$password = $_POST['password'];
	$class   = $_POST['class'];
	$subject =$_POST['subject'];		
	$dep =$_POST['dep'];
	
		$query= "select *from $dep WHERE username='$username'";
		 
		 $query_run= mysql_query($query,$conn);
		 if(mysql_num_rows($query_run )>0) {
			 // there is already auser with the same user name
			
			 echo '<script type="text/javascript"> alert("Tutor already exists.. sign up another tutor") </script>';
		 }




        else{
				 			  
			 $query ="insert into $dep VALUES ('$username','$password', '$class','$subject')";
			 $query_run = mysql_query($query,$conn);
	
		}
		
 if($query_run)
				 {
			 echo '<script type="text/javascript"> alert("Tutor Registered.. ") </script>';
				 }
				 			
				else{
					echo '<script type="text/javascript"> alert("Error.. ") </script>';

					}
echo $house; 
					$query= "CREATE TABLE $house (id SMALLINT NOT NULL AUTO_INCREMENT,
 name VARCHAR(32) NOT NULL,
 PRIMARY KEY (id)";
					$query_run=mysql_query($query,$conn1);

				
	}		 
				
					 				
				 
				 
       
		
		 


    
	

     
?>


</div> 
    <footer>
	<p>Copyright©2017 AIS learning Hub 2.0 All Rights Reserved</p>
	<p id="credit">Powered by JabenSoft®</p>
	</footer>
    </div>
	
	
	

	
</body>
</html>