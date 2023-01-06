<html>
<head>
<?php
require 'config.php';
session_start();
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
 
  .active,.set_buton,.set_button, .rtab  {
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

   .header{
	   color: white;
	   font-size:35px;
	   font-famiy :  Comic Sans,Verenda;
   line-height:60px;
   }
   
.link{
	float:right;
	
}
.tmark{
			 font-size:50px;
			    font-family :   Andalus, AngsanaUPC, "Arabic Typesetting";  
		 }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<title>Adminstrator </title>
	<body>
	<div id="page">
	<ul>
		<span class="tmark">ExeatLog</span>
	 
	 

</br>
<li><a class="set_buton" href="admin_page.php">Exeat Log</a></li>
<li><a class="set_button" href="admin_set.php">Settings</a></li>
</br>
</br>
</br>
</br>
	<div id="Main_wrapper">
<ul>
<li><a class="rtab" href="admin_set.php">Manage Houses </a></li>
<li><a class="active" href="acc_set.php">My Account</a></li>
</ul>

<center><form action="masteracc_set.php" method="post">
<label>Select the account to edit:</label>
<select name="master">
<?php 



$query = "SELECT * FROM housemasters";
 $result = mysql_query($query,$conn);
 $rows = mysql_num_rows($result);
 if (!$result) die ("Database access failed: " . mysql_error());
 
 for ($j = 0 ; $j < $rows ; ++$j)
 {
 echo  '<option>'.mysql_result($result,$j,'username').'</br>'.'</option>';}

 ?>

</select></br></br></br>
<input type="text" name="new_username" placeholder="Type in the new username"><input type="submit" name="submit" value=" Change">
</br>
</br>
<input type="password" name="new_password" placeholder="Enter in the new password"><input type="submit" name="submit1" value=" Change">
</br></br>
</form>
</center>

</div>

<?php
if(isset($_POST['submit'])){
$new_username=$_POST['new_username'];	


$master =$_POST['master'];



$query="UPDATE housemasters SET username='$new_username'  WHERE username='$master'";
$query_run=mysql_query($query,$conn);


if($query_run){
	
	echo '<script type="text/javascript"> alert("Changes Saved...")</script>';
	
}

else{
	echo '<script type="text/javascript"> alert("Error...")</script>';
	
	
}

	

}

if(isset($_POST['submit1'])){
$new_password=$_POST['new_password'];	


$master =$_POST['master'];



$query="UPDATE housemasters SET password='$new_password'  WHERE username='$master'";
$query_run=mysql_query($query,$conn);


if($query_run){
	
	echo '<script type="text/javascript"> alert("Changes Saved...")</script>';
	
}

else{
	echo '<script type="text/javascript"> alert("Error...")</script>';
	
	
}

	

}


?>



</div> 
    <footer>
	<p>Copyright©2018 ExeatLog 1.0 All Rights Reserved</p>
	<p id="credit">Powered by JabenSoft®</p>
	</footer>
    </div>
	
	
	

	
</body>
</html>